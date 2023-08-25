<?php

namespace App\Services;

use Embed\Embed;

class MetasService
{
    public function start()
    {
        $embed = new Embed();
        $info = $embed->get('https://olx.uz');
        $metas = $info->getMetas();
//        dd($metas);

//        dd($metas->all()); //Return all values
//        dd($metas->get('og:title')); //Return a key value

//        dd($metas->str('og:title')); //Return the value as string (remove html tags)
//        dd($metas->html('og:description')); //Return the value as html
//        dd($metas->int('og:video:width')); //Return the value as integer
        dd($metas->url('og:url')); //Return the value as full url (converts relative urls to absolutes)
    }
}
