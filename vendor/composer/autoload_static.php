<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb208b6fda2e7147e17eb48445f7777ce
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb208b6fda2e7147e17eb48445f7777ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb208b6fda2e7147e17eb48445f7777ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb208b6fda2e7147e17eb48445f7777ce::$classMap;

        }, null, ClassLoader::class);
    }
}
