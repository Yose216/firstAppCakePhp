<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite931f15cffc43c8fb4a4c8568ea25d95
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite931f15cffc43c8fb4a4c8568ea25d95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite931f15cffc43c8fb4a4c8568ea25d95::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
