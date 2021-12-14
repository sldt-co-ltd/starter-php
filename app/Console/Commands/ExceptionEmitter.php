<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExceptionEmitter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emit:exception';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'emit an exception';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        throw new \Exception('Not implemented');
        // return Command::SUCCESS;
    }
}
