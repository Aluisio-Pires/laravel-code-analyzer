<?php

namespace Aluisio\LaravelCodeAnalyzer\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class PintCommand extends Command
{
    protected $signature = 'pint {args?* : Pint arguments}';

    protected $description = 'Runs Pint';

    public function handle(): int
    {
        $args = $this->argument('args');
        $command = array_merge(['./vendor/bin/pint'], $args);

        $process = new Process($command);
        $process->setTty(true);
        $process->run();

        return $process->getExitCode();
    }
}
