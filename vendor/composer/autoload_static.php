<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00513392635e2544614f8445a8f283f2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit00513392635e2544614f8445a8f283f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00513392635e2544614f8445a8f283f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00513392635e2544614f8445a8f283f2::$classMap;

        }, null, ClassLoader::class);
    }
}
