<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb671e983b43cd6112cb65d303383c30c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Waynelogic\\MagicForms\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Waynelogic\\MagicForms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb671e983b43cd6112cb65d303383c30c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb671e983b43cd6112cb65d303383c30c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb671e983b43cd6112cb65d303383c30c::$classMap;

        }, null, ClassLoader::class);
    }
}
