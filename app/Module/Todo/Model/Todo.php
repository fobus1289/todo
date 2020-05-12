<?php

namespace App\Module\Todo\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Module\Todo\Model
 */
class Todo extends Model
{
    protected $primaryKey = 'todo_id';

    public $timestamps = true;

    protected $fillable = [
        'todo_id',
        'todo_name'
    ];

}
