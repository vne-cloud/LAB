<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit32c4c9206f83289cd8069a1e0b4b1342
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'stepanov\\' => 9,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'stepanov\\' => 
        array (
            0 => __DIR__ . '/..' . '/vne-cloud/stepanov',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/..' . '/rok9ru/trpo-core/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit32c4c9206f83289cd8069a1e0b4b1342::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit32c4c9206f83289cd8069a1e0b4b1342::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit32c4c9206f83289cd8069a1e0b4b1342::$classMap;

        }, null, ClassLoader::class);
    }
}