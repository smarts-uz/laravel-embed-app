<?php

namespace App\Services;

use Embed\Embed;

class OEmbedService
{
    public function start(){
//        $embed = new Embed();
//        $info = $embed->get('https://www.mover.uz');
//
//        $oembed = $info->getOEmbed();
//        dump($oembed);
//        dump($oembed->all());
//    $title = $oembed->get();
//        dump($title); //Return a key value
//        dump($oembed->get('title')); //Return a key value
//        $oembed->str('title'); //Return the value as string (remove html tags)
//        dump($oembed->html('html')); //Return the value as html
//        $oembed->int('width'); //Return the value as integer
//        dump($oembed->url('url')->getPath());

        $embed = new Embed();

        $result = $embed->get('https://www.instagram.com/p/B_C0wheCa4V/');
        $result->setSettings([
            'oembed:query_parameters' => ['hidecaption' => true]
        ]);
        $oembed = $info->getOEmbed();
    }
}
