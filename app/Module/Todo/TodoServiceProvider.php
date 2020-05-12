<?php

namespace App\Module\Todo;

use App\Module\Todo\Install\InstallTodo;
use App\Module\Todo\Service\TodoService;
use Illuminate\Support\ServiceProvider;

/**
 * Class TodoServiceProvider
 * @package App\Module\Todo
 */
class TodoServiceProvider extends ServiceProvider
{
    /**
     * @var string[]
     */
    protected $commands = [
        InstallTodo::class
    ];

    public function register()
    {
        $this->app->singleton(TodoService::class, function () {
            return new TodoService;
        });

        $this->app->alias(TodoService::class, 'TodoService');

        $this->commands($this->commands);
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Migration');

        $this->loadRoutesFrom(__DIR__.'/Route/api.php');

        $this->loadViewsFrom(__DIR__.'/View', 'todo');
    }
}
