<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0209e8ddcd57d4d7afbb0ad4d5d5c8da
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0209e8ddcd57d4d7afbb0ad4d5d5c8da::$classMap;

        }, null, ClassLoader::class);
    }
}
