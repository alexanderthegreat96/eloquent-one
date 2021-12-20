<?php
namespace EloquentOne\Model;
use Illuminate\Database\Eloquent;
abstract class Model extends Eloquent\Model
{
    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}