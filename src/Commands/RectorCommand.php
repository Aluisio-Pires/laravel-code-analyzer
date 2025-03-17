<?php

namespace Aluisio\LaravelCodeAnalyzer\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class RectorCommand extends Command
{
    protected $signature = 'rector {args?* : Rector arguments}';

    protected $description = 'Runs Rector';

    public function handle(): int
    {
        $args = $this->argument('args');
        $command = array_merge(['./vendor/bin/rector'], $args);

        $process = new Process($command);
        $process->setTty(true);
        $process->run();

        return $process->getExitCode();
    }
}
