<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a01ae980e8f395dc4aa1ec1fd500bfc
{
    public static $classMap = array (
        'DB' => __DIR__ . '/../..' . '/wpa24/Provider/DB.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3a01ae980e8f395dc4aa1ec1fd500bfc::$classMap;

        }, null, ClassLoader::class);
    }
}