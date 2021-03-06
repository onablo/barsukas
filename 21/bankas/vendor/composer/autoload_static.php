<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4906829cb232f81116c276e7ea13af0
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bank\\' => 5,
        ),
        'A' => 
        array (
            'App\\DB\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bank\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'App\\DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4906829cb232f81116c276e7ea13af0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4906829cb232f81116c276e7ea13af0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4906829cb232f81116c276e7ea13af0::$classMap;

        }, null, ClassLoader::class);
    }
}
