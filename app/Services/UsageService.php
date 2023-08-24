<?php

namespace App\Services;

use Embed\Embed;

class UsageService
{
    public function start()
    {
        $embed = new Embed();
        $info = $embed->get('https://mover.uz/');
//        $info = $embed->get('https://www.desktopbackground.org/download/1280x960/2015/03/06/912770_image-best-top-desktop-beautiful-nature-wallpapers-hd-nature_1600x1000_h.jpg');
//        dump($info->title);
//        dump('description: '.$info->description); //The page description
//        dump( 'url: '.$info->url);  //The canonical url
//        foreach ($info->keywords as $items){
//            dump($items);
//        }
//        dump($info->keywords); //The page keywords
//        dump($info->image);
//        dump('===========================');
//        dump($info->code->html);
//        dump('===========================');
//        dump($info->code->width);
//        dump('===========================');
//        dump($info->code->height);
//        dump($info->authorName);
//        dump($info->authorUrl);
//        dump($info->cms);
//        dump($info->language);
//        dump($info->languages);
//        dump($info->providerName);
//        dump($info->providerUrl);
//        dump($info->icon);
        dump($info->icon->getPath());
        dump($info->favicon->getPath());
        dump($info->publishedTime);
        dump($info->license);
        dump($info->feeds);

    }
}
