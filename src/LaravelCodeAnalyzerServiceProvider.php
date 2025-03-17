<?php

namespace Aluisio\LaravelCodeAnalyzer;

use Illuminate\Support\ServiceProvider;
use Aluisio\LaravelCodeAnalyzer\Commands\PintCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\PhpStanCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\RectorCommand;
use Aluisio\LaravelCodeAnalyzer\Commands\AnalyseCommand;

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
}
