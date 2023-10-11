<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class getdbname extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getdbname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to get current database name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        echo "Current Database is ".$this->info(DB::connection()->getDatabaseName());
    }
}
