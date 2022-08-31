<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit90fabb4c6ab8b71eed2dcc168be9f99f
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

        spl_autoload_register(array('ComposerAutoloaderInit90fabb4c6ab8b71eed2dcc168be9f99f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit90fabb4c6ab8b71eed2dcc168be9f99f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit90fabb4c6ab8b71eed2dcc168be9f99f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
