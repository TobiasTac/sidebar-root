<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae2bb944dfd7d9dece1d9e44c71b6a8d
{
    public static $files = array (
        '012752c33f8dbdb4c37d65eef5062614' => __DIR__ . '/../..' . '/source/Minify.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitae2bb944dfd7d9dece1d9e44c71b6a8d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitae2bb944dfd7d9dece1d9e44c71b6a8d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitae2bb944dfd7d9dece1d9e44c71b6a8d::$classMap;

        }, null, ClassLoader::class);
    }
}
