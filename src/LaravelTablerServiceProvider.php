<?php
namespace JokoSusilo\LaravelTabler;

use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

class LaravelTablerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tabler', function ($command) {
            LaravelTabler::install();

            $command->info('Auth scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
