<?php

$students = DB::table("students")->get();
var_dump($students);
$stus = DB::table("students")->get();

foreach ($stus as $student) {
    var_dump($student['name']);
}


class DB extends PDO {

    // Coding OO
    // Inhertance

    // Dev OO
    // Singleton
    // Static Method Chain

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    private static $_instance;

    private $table_name;

    public static function table($table_name) {
        if(!self::$_instance instanceof DB) {
            self::$_instance = new DB();
        }
        self::$_instance->table_name = $table_name;
        return self::$_instance;
    }

    public function get() {
        $prep = $this->prepare("SELECT * FROM " . $this->table_name);
        $prep->execute();
        return $prep->fetchAll(PDO::FETCH_ASSOC);
    }

    public function __construct(){
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'wpa24_ci';
        $this->user = 'root';
        $this->pass = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        parent::__construct( $dns, $this->user, $this->pass );

        echo "Construct! <br />";
    }

    public function __destruct()
    {
        echo "Destructor <br />";
    }


}