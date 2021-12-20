<?php
require 'autoload.php';

try
{
    /**
     * Note you must set the $fillable fields in your model
     */
    $insertData = \EloquentOne\Demo\Models\MyModel::create
    (
        [
            'username' => 'Username',
            'password' => 'Password',
            'first_name' => 'FirstName',
            'last_name' => 'LastName'
        ],
    );
}
catch (Exception $e)
{
    echo $e->getMessage();
}