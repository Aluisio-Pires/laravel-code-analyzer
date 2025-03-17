<?php

namespace Aluisio\LaravelCodeAnalyzer;

use Aluisio\LaravelCodeAnalyzer\Commands\AnalyseCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\PhpStanCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\PintCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\RectorCommand;
use Illuminate\Support\ServiceProvider;

class LaravelCodeAnalyzerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->commands([
            PintCommand::class,
            PhpStanCommand::class,
            RectorCommand::class,
            AnalyseCommand::class,
        ]);
    }

    public function register(): void
    {
        if (! file_exists(base_path('rector.php'))) {
            copy(__DIR__.'/../stubs/config/rector.php', 'rector.php');
        }

        if (! file_exists(base_path('phpstan.neon'))) {
            copy(__DIR__.'/../stubs/config/phpstan.neon', base_path('phpstan.neon'));
        }
    }
}
