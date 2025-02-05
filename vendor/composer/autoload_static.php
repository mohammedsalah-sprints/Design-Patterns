<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0fedcf9143ffb6ddc1fe592511a7092
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0fedcf9143ffb6ddc1fe592511a7092::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0fedcf9143ffb6ddc1fe592511a7092::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc0fedcf9143ffb6ddc1fe592511a7092::$classMap;

        }, null, ClassLoader::class);
    }
}
