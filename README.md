
# eloquent-one

Standalone ready-to-go implementation of illuminate/laravel-database, also known as Laravel's ORM


## Documentation

[Laravel Eloquent Documentation](https://laravel.com/docs/8.x/eloquent)

## Usage
- Change your database parameters in /Config/MySql.php
- Write your models in Models
- Require 'autoload.php'
- Start calling your models. Follow one  of the examples.

## Why did I  do this?
It's simple. Eloquent is easy to use and implement. A lot of people seem to be confused about this.
Therefore I made this small package to help people get into OOP and speed up their work.

## It currently runs the latest Laravel Database Version
Which is: 8.76


## Model Example

``` php
<?php
namespace EloquentOne\Demo\Models;
use EloquentOne\Model\Model;

class MyModel extends Model
{
    protected $table = 'my_defined_table';
    protected $fillable = ['user','passs','fist_name','last_name'];
}

```

## Invoking the model

``` php
<?php
require 'autoload.php';

/**
 * Test 1 . Involving find all
 */

try
{
    $results = \EloquentOne\Demo\Models\MyModel::all();
    \LexSystems\Framework\Kernel\Helpers\Debugger\Debugger::var_dump($results);
}
catch (Exception $e)
{
    echo $e->getMessage();
}




```