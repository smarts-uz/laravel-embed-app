<?php

namespace App\Services;

use Embed\Embed;

class MultipleRequestsService
{
    public function start()
    {
        $embed = new Embed();

        //Load multiple urls asynchronously:
        $infos = $embed->getMulti(
            'https://www.olx.uz/',
            'https://mover.uz',
            'https://mail.ru',
        );

        foreach ($infos as $info) {
           dump($info->title);
        }
    }
}
