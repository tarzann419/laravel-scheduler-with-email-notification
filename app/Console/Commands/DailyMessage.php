<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DailyMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'for running daily messages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $test = DB::table('test')->where('id', 1)->value('stock');
        if ($test == 4) {
            echo 'this is my first message';
        }
        else {
            echo 'this is my second message';
        }
    }
}
