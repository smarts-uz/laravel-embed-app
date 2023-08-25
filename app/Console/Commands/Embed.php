<?php

namespace App\Console\Commands;

use App\Services\MultipleRequestsService;
use App\Services\UsageService;
use Illuminate\Console\Command;

class Embed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'embed:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $usage = new UsageService();
//        $usage->start();


        $multipleRequest = new MultipleRequestsService();
        $multipleRequest->start();
    }
}
