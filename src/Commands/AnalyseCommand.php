<?php

namespace Aluisio\LaravelCodeAnalyzer\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class AnalyseCommand extends Command
{
    protected $signature = 'analyse';

    protected $description = 'Runs pint, rector and phpstan';

    public function handle(): int
    {
        $commands = [
            ['./vendor/bin/pint'],
            ['./vendor/bin/rector'],
            ['./vendor/bin/phpstan', 'analyse'],
        ];

        foreach ($commands as $command) {
            $this->info('Running: '.implode(' ', $command));

            $process = new Process($command);
            $process->setTty(true);
            $process->run();

            if (! $process->isSuccessful()) {
                $this->error('Command failed: '.implode(' ', $command));

                return $process->getExitCode();
            }
        }

        $this->info('All commands executed successfully!');

        return 0;
    }
}
