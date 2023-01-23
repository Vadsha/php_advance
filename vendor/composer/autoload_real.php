<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd8a7374b25b90ec19e3cac7c72f4ddc5
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

        spl_autoload_register(array('ComposerAutoloaderInitd8a7374b25b90ec19e3cac7c72f4ddc5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd8a7374b25b90ec19e3cac7c72f4ddc5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd8a7374b25b90ec19e3cac7c72f4ddc5::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd8a7374b25b90ec19e3cac7c72f4ddc5::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired8a7374b25b90ec19e3cac7c72f4ddc5($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired8a7374b25b90ec19e3cac7c72f4ddc5($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}