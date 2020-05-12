<?php

namespace App\Module\Todo\Install;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

/**
 * Class InstallTodo
 * @package App\Module\Todo\Install
 */
class InstallTodo extends Command
{
    /**
     * @var string
     */
    protected $signature   = 'todo:install';
    /**
     * @var string
     */
    protected $description = 'you can install todo:install';

    /**
     * @run
     */
    public function handle()
    {
        Artisan::call('vendor:publish', [
            '--provider' => 'App\Module\Todo\TodoServiceProvider'
        ]);

        $this->info('vso ok');
    }

}
