<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13ee55af6f26f85a172bd448ceea463f
{
    public static $files = array (
        '4ba1167ff053aab3afcc2d28993cfca7' => __DIR__ . '/../..' . '/wire/core/ProcessWire.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit13ee55af6f26f85a172bd448ceea463f::$classMap;

        }, null, ClassLoader::class);
    }
}
