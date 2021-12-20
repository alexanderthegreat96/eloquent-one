<?php
namespace EloquentOne\Demo\Models;
use EloquentOne\Model\Model;

class MyModel extends Model
{
    protected $table = 'my_defined_table';
    protected $fillable = ['user','passs','fist_name','last_name'];
}