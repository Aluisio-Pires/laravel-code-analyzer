<?php

namespace Aluisio\LaravelCodeAnalyzer\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class PhpStanCommand extends Command
{
    protected $signature = 'phpstan {args?* : PhpStan arguments}';
    protected $description = 'Runs PhpStan';

    public function handle(): int
    {
        $args = $this->argument('args');
        $command = array_merge(['./vendor/bin/phpstan'], $args);

        $process = new Process($command);
        $process->setTty(true);
        $process->run();

        return $process->getExitCode();
    }
}