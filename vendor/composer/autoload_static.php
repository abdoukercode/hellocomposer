<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffb63ecfacdd86bbeb86f603c35ced53
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
            0 => __DIR__ . '/../..' . '/App/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitffb63ecfacdd86bbeb86f603c35ced53::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffb63ecfacdd86bbeb86f603c35ced53::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
