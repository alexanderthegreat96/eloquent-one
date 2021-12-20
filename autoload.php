<?php
require __DIR__.'/core/Autoloader.php';
require __DIR__.'/core/BootEloquent.php';
/**
 * Load the mighty debugger class
 */
\EloquentOne\Autoloader::load(__DIR__.'/core/Debugger/');

/**
 * Load config files first
 * Edit your Database Params in Config
 */

\EloquentOne\Autoloader::load(__DIR__.'/Config/');

/**
 * Load laravel database package
 * @package illuminate-database
 */
\EloquentOne\Autoloader::loadComposerLibs(__DIR__.'/core/SystemDependencies/');

/**
 * Load the model extension
 */

\EloquentOne\Autoloader::load(__DIR__.'/core/Kernel/');

/**
 * Initiate
 */

\EloquentOne\BootEloquent::init();

/**
 * Autoload all model classes
 */
\EloquentOne\Autoloader::load(__DIR__.'/Models/');
