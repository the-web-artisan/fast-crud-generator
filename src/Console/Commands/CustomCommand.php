<?php

namespace Scout\Inspire\Console\Commands;

use Illuminate\Console\Command;

class CustomCommand extends Command
{
    protected $signature = 'package:custom-command';

    protected $description = 'Description of the custom command';

    public function handle()
    {
        $this->info('Custom command executed successfully!');
    }
}
