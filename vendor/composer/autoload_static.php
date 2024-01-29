<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95adccd170e83fe9a1e8c04096aec614
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95adccd170e83fe9a1e8c04096aec614::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95adccd170e83fe9a1e8c04096aec614::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95adccd170e83fe9a1e8c04096aec614::$classMap;

        }, null, ClassLoader::class);
    }
}