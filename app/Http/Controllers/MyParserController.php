<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;

class MyParserController extends Controller
{
    public function parser()
    {

        $html = $this->file_get_contents_curl('https://www.tirerack.com/content/tirerack/desktop/en/tires/by-brand.html');
        $html = HTMLDomParser::str_get_html($html);
        $aBrandLinks = $html->find('#ui-brandListBlog > a');

        foreach ($aBrandLinks as $aBrandLink)
        {
            $htmlProductLink = $this->file_get_contents_curl('https://www.tirerack.com'.$aBrandLink->href);        //Ссылка на конкретный бренд
            $htmlProduct = HtmlDomParser::str_get_html($htmlProductLink);
            $listColumns = $htmlProduct->find('section#productList > div.listColumns');
//            dd($listColumns);
            foreach ($listColumns as $listColumn)
            {
                    $column1 = $listColumn->find('.column');
                    $prefCats1 = $column1[0]->find('.perf-cat');
//                    dd($column1, $prefCats1);

                foreach ($prefCats1 as $prefCat1)
                {
                    $productTires = $prefCat1->find('.productTire');

                    dd($productTires);
                }


                if ($listColumn->find('.column-two > .pref-cat') != [])
                {
                    $prefCats2 = $listColumn->find('.column-two > .pref-cat');
                }
            }
        }
        dd($htmlProductLink);

    }
    function file_get_contents_curl( $url ) {

        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_AUTOREFERER, TRUE );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );

        $data = curl_exec( $ch );
        curl_close( $ch );
        return $data;
    }
}
