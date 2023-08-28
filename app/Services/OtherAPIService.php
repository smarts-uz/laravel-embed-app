<?php

namespace App\Services;

use Embed\Document;
use Embed\Embed;

class OtherAPIService
{
    public function otherAPI()
    {
        $embed = new Embed();
        $info = $embed->get('https://www.mediawiki.org/w/api.php?action=abusefiltercheckmatch');

        $api = $info->getApi();
        dump($api->all());
        dump($api->get('title'));
        dump($api->str('title'));
        var_dump($api->html('html'));
        dump($api->url('url'));

    }
}
