<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37486898834b24ffce540a7ae0712e7c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/Controllers/AdminController.php',
        'App\\Controllers\\ArticlesController' => __DIR__ . '/../..' . '/app/Controllers/ArticlesController.php',
        'App\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/Controllers/AuthController.php',
        'App\\Controllers\\NotFoundController' => __DIR__ . '/../..' . '/app/Controllers/NotFoundController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/Controllers/UsersController.php',
        'App\\Core\\Controller' => __DIR__ . '/../..' . '/app/Core/Controller.php',
        'App\\Core\\Database' => __DIR__ . '/../..' . '/app/Core/Database.php',
        'App\\Core\\Model' => __DIR__ . '/../..' . '/app/Core/Model.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/app/Core/Router.php',
        'App\\Models\\Article' => __DIR__ . '/../..' . '/app/Models/Article.php',
        'App\\Models\\Auth' => __DIR__ . '/../..' . '/app/Models/Auth.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/Models/User.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidCallbackException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidCallbackException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37486898834b24ffce540a7ae0712e7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37486898834b24ffce540a7ae0712e7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit37486898834b24ffce540a7ae0712e7c::$classMap;

        }, null, ClassLoader::class);
    }
}
