<?php

namespace App\Services;
use Embed\Embed;
use Embed\Http\Crawler;
use GuzzleHttp\Client;
use MoonShine\Tests\Fixtures\Requests\CrudRequestFactory;

class ExtendingEmbed
{
    public function start()
    {
        $client = new Client();
        $requestFactory = new CrudRequestFactory();
        $uriFactory = new UriCustomUriFactory();

//The Crawler is responsible for perform http queries
        $crawler = new Crawler($client, $requestFactory, $uriFactory);

//Create an embed instance passing the Crawler
        $embed = new Embed($crawler);
    }
}
