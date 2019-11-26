<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use Sunra\PhpSimple\HtmlDomParser;

class MyParserController extends Controller
{
    public function parser()
    {
        $html = $this->file_get_contents_curl('https://www.tirerack.com/content/tirerack/desktop/en/tires/by-brand.html');
        $html = HTMLDomParser::str_get_html($html);
        $aBrandLinks = $html->find('#ui-brandListBlog > a');
        //раскручивание бренд листа
        foreach ($aBrandLinks as $aBrandLink)
        {
            $htmlProductLink = $this->file_get_contents_curl('https://www.tirerack.com'.$aBrandLink->href);        //Ссылка на конкретный бренд
            $htmlProduct = HtmlDomParser::str_get_html($htmlProductLink);
            $listColumns = $htmlProduct->find('section#productList > div.listColumns');
            //раскручивание листов со столбцами
            foreach ($listColumns as $listColumn)
            {
                $column1 = $listColumn->find('.column');
                $prefCats1 = $column1[0]->find('.perf-cat');
                //ракручивание категорий первого столбца
                foreach ($prefCats1 as $prefCat1)
                {
                    $productTires = $prefCat1->find('.productTire');

                    foreach ($productTires as $productTire)
                    {
                        $aProductTire = $productTire->find('a');
                        $aProductTireLink = $this->file_get_contents_curl('https://www.tirerack.com'.$aProductTire[0]->href);
                        $productDetails = HtmlDomParser::str_get_html($aProductTireLink);
                        $productDetails = $productDetails->find('#product-details');

//                        $image = $productDetails[0]->find('.image-container');
//                        $image = $image[0]->find('img');
//                        $imageName = uniqid().'.jpg';
//                        $image = $this->file_get_contents_curl('https://www.tirerack.com'.$image[0]->src);
//                        $image = Image::make($image)->save(public_path('img/'. $imageName ));

                        $tabbedPanelsContentGroup = $productDetails[0]->find('.TabbedPanelsContentGroup');
                        $description = null;

                        //извличение описания продукта
                        $productDescriptions = $tabbedPanelsContentGroup[0]->find('#englishCopy > p');
                        $productDescription = $productDescriptions[0]->text();
                        foreach ($productDescriptions as $productDescription)
                        {
                            $description .= $productDescription->text().'
                            
                            ';
                        }

                        //извлечение размеров
                        $productSizes = $tabbedPanelsContentGroup[0]->find('section.size > ul > li');
                        $this->productSave($productSizes);

                        $i++;

                        //извлечение таблицы характеристиик

//                                $tabbedPanels2 = $productDetails->find('#TabbedPanels2');
//
//                                $specsTable = $productDetails->find('table.specification.floatHead');
//                                $table = $tabbedPanels2->find('.specification.floatHead')[0]->text();
//                                dd($specsTable);
//                                $productSpecTable = $tabbedPanelsContent->find('.specification.floatHead');
//                                dd($productSpecTable);


                    }
                }
                //нужно реализовать такой же алгоритм для column-two
            }
        }

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

    function productSave($productSizes){
        foreach ($productSizes as $productSize)
        {
            $sizes = $productSize->find('.sizes');
            $servDesc = $productSize->find('.servDesc');
            dd(substr(trim($sizes[0]->text(), " "), -2),
                trim($sizes[0]->text(), " "),
                trim($servDesc[0]->text(), " "));
            //теперь все это нужно запихать в бд
        }
    }
}
