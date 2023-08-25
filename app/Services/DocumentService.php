<?php

namespace App\Services;

use Embed\Embed;

class DocumentService
{
    public function start()
    {
        $embed = new Embed();

        $info = $embed->get('https://mover.uz');
        $document = $info->getDocument();
//       dump($document->link('dns-prefetch')); //Returns the href of a <link>

//        dump($document->getDocument()); //Returns the DOMDocument instance
        $html = (string) $document; //Returns the html code
//        dump($html);
//        dump($document->select('.//h1')); //Search
        $text = $document->select('.//h1');
//        dump($text->str());
        $result = $document->select('.//p');

        //Filter the results
        $attr = $result->filter(fn ($node) => $node->getAttribute('class'));
//        dump($attr->getAll());

//        $id = $result->str('id'); //Return the id of the first result as string
//        $text = $result->strAll();
//        dump($text);

//        $href = $result->url('href')->getPath();
//        $url = $result->url('href');
//        dump($href);
//        dump($url);

        $node = $result->node()->getNodePath(); //Return the first node found (DOMElement)
        $nodes = $result->nodes(); //Return all nodes found

        dump($node);


    }
}
