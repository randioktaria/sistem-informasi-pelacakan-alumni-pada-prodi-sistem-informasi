<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6458e5e8505e7ae7b8d8129145f100bd
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'E' => 
        array (
            'Engine\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Engine\\' => 
        array (
            0 => __DIR__ . '/..' . '/engine',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6458e5e8505e7ae7b8d8129145f100bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6458e5e8505e7ae7b8d8129145f100bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}