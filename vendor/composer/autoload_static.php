<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d81bd7a8ef9744cc1f831b4898a1018
{
    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'ActiveRecord\\' => 
            array (
                0 => __DIR__ . '/../..' . '/../lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1d81bd7a8ef9744cc1f831b4898a1018::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1d81bd7a8ef9744cc1f831b4898a1018::$classMap;

        }, null, ClassLoader::class);
    }
}
