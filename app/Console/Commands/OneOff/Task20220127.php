<?php

namespace App\Console\Commands\OneOff;

use Illuminate\Console\Command;

class Task20220127 extends Command
{
    protected $signature = 'oneoff:20220127';

    protected $description = 'A one-off task to be executed on 2022-01-27';

    public function handle() {
        $this->info('OK');
    }
}