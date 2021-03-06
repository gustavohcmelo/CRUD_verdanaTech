<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ced26869f9f014340a71d30cc83c992
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Verdanatech\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Verdanatech\\' => 
        array (
            0 => __DIR__ . '/..' . '/verdanatech/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ced26869f9f014340a71d30cc83c992::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ced26869f9f014340a71d30cc83c992::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0ced26869f9f014340a71d30cc83c992::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
