<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit804a11a2365e6dc9cec9cf85d964d480
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

        spl_autoload_register(array('ComposerAutoloaderInit804a11a2365e6dc9cec9cf85d964d480', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit804a11a2365e6dc9cec9cf85d964d480', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit804a11a2365e6dc9cec9cf85d964d480::getInitializer($loader));

        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInit804a11a2365e6dc9cec9cf85d964d480::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire804a11a2365e6dc9cec9cf85d964d480($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire804a11a2365e6dc9cec9cf85d964d480($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
