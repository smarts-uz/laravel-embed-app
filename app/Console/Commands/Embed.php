<?php

namespace App\Console\Commands;

use App\Services\DocumentService;
use App\Services\ExtendingEmbed;
use App\Services\LinkedDataService;
use App\Services\MetasService;
use App\Services\MultipleRequestsService;
use App\Services\OEmbedService;
use App\Services\OtherAPIService;
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
//        $usage = new UsageService();
//        $usage->start();

//        $multipleRequest = new MultipleRequestsService();
//        $multipleRequest->start();

//        $document = new DocumentService();
//        $document->start();

//        $metas = new MetasService();
//        $metas->start();

//        $oembed = new OEmbedService();
//        $oembed->start();

//        $linkedData = new LinkedDataService();
//        $linkedData->start();


//        $extendingEmbed = new ExtendingEmbed();
//        $extendingEmbed->start();

        $api = new OtherAPIService();
        $api->otherAPI();

    }
}
