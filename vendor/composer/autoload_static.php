<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a5badf9ee5aa6aebe592b11e27150c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stece\\TestBitrix\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stece\\TestBitrix\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a5badf9ee5aa6aebe592b11e27150c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a5badf9ee5aa6aebe592b11e27150c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5a5badf9ee5aa6aebe592b11e27150c4::$classMap;

        }, null, ClassLoader::class);
    }
}
