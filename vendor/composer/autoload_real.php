<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7e8c3c14ff33b199b4a0838993eb8423
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

        spl_autoload_register(array('ComposerAutoloaderInit7e8c3c14ff33b199b4a0838993eb8423', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7e8c3c14ff33b199b4a0838993eb8423', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7e8c3c14ff33b199b4a0838993eb8423::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
