<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class showdb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'show me db';

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
     * @return int
     */
    public function handle()
    {
        $message = $this ->info("show successful");
        $message1 = $this -> info(DB::Connection()->getDatabaseName());
        // return $message1
    }
}
