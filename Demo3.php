<?php
require 'autoload.php';
try
{
   $model = new \EloquentOne\Demo\Models\MyModel();
   $model->first_name = 'FirstName';
   $model->last_name = 'Last Name';
   $model->username = '';
   $model->password = '';
   $model->save();
}
catch (Exception $e)
{
    echo $e->getMessage();
}