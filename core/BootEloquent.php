<?php
namespace EloquentOne;
use Illuminate\Database\Capsule\Manager as Capsule;
class BootEloquent
{
    public static function init()
    {
        /**
         * Boot eloquent ORM
         */

        $capsule = new Capsule;

        $capsule->addConnection(array(
            'driver'    => 'mysql',
            'host'      => \EloquentOne\Configs\MySql::host,
            'database'  => \EloquentOne\Configs\MySql::db,
            'username'  => \EloquentOne\Configs\MySql::user,
            'password'  => \EloquentOne\Configs\MySql::pass,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ));

        $capsule->bootEloquent();
        $capsule->setAsGlobal();
    }
}