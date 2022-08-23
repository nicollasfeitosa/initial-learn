<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26a3698315007617c82f5808a5205e81
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'NICK\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'NICK\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26a3698315007617c82f5808a5205e81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26a3698315007617c82f5808a5205e81::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
