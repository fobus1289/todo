<?php

namespace App\Module\Todo\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TodoFacade
 * @package App\Module\Todo\Facade
 */
class TodoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TodoService';
    }
}
