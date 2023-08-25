<?php

namespace App\Services;

use Embed\Embed;

class LinkedDataService
{
    public function start()
    {
        $embed = new Embed();
        $info = $embed->get('https://w3c.github.io/json-ld-api/tests/manifest.jsonld');
//        $info = $embed->get('https://w3c.github.io/json-ld-api/tests/');

        $ld = $info->getLinkedData();
//        dump($ld);
//        $ld->get('name');
//        dump($ld->str('name')); //Return the value as string (remove html tags)
        dump($ld->html('description')); //Return the value as html
        $ld->int('width'); //Return the value as integer
        $ld->url('url'); //Return the value as full url (converts relative urls to absolutes)
//        dump($ld->all());

    }
}
