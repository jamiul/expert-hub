<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Symfony\Component\Console\Command\Command as CommandAlias;

class DummyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix-routes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fix invalid routes on run';

    /**
     * Execute the console command.
     *
     * @return int
     * @throws Exception
     * @throws \Throwable
     */
    public function handle(): int
    {
        $this->line("Route syntax updated successfully.\n");

        return CommandAlias::SUCCESS;
    }
}
