<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfe44a33ea4f6e22a841f6e1a7f95b120
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitfe44a33ea4f6e22a841f6e1a7f95b120', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfe44a33ea4f6e22a841f6e1a7f95b120', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfe44a33ea4f6e22a841f6e1a7f95b120::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
