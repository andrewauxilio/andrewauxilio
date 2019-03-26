<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b66ef7c60d2208924e8aa2ee880fd94
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b66ef7c60d2208924e8aa2ee880fd94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b66ef7c60d2208924e8aa2ee880fd94::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
