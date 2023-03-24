<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit167bf568d4350fbf8c3b3e2f9482028f
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit167bf568d4350fbf8c3b3e2f9482028f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit167bf568d4350fbf8c3b3e2f9482028f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit167bf568d4350fbf8c3b3e2f9482028f::$classMap;

        }, null, ClassLoader::class);
    }
}
