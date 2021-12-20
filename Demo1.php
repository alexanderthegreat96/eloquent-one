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


