<?php

// autoload_commands_real.php @generated by Composer

class ComposerAutoloaderInitab6fd1baa61cc5e813af872e6821c398
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitab6fd1baa61cc5e813af872e6821c398', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitab6fd1baa61cc5e813af872e6821c398', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_commands_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }
        $loader->register(true);

        return $loader;
    }
}
