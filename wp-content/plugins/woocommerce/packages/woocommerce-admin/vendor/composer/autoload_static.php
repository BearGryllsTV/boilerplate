<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

<<<<<<< HEAD
class ComposerStaticInit4ab7ee0f498bdcb8cd124b5723f8d283
=======
class ComposerStaticInitd36c771c06d6c67bc2f71fb2f863a29a
>>>>>>> develop
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'A' => 
        array (
            'Automattic\\WooCommerce\\Admin\\' => 29,
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Automattic\\WooCommerce\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
<<<<<<< HEAD
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ab7ee0f498bdcb8cd124b5723f8d283::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ab7ee0f498bdcb8cd124b5723f8d283::$prefixDirsPsr4;
=======
            $loader->prefixLengthsPsr4 = ComposerStaticInitd36c771c06d6c67bc2f71fb2f863a29a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd36c771c06d6c67bc2f71fb2f863a29a::$prefixDirsPsr4;
>>>>>>> develop

        }, null, ClassLoader::class);
    }
}
