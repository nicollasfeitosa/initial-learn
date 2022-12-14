<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b50af6aef5b2969cf0145d467b8d0e8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b50af6aef5b2969cf0145d467b8d0e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b50af6aef5b2969cf0145d467b8d0e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
