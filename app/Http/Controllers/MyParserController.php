<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Product_size;
use App\Size;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;
use mysql_xdevapi\Exception;
use Sunra\PhpSimple\HtmlDomParser;

class MyParserController extends Controller
{
//    public $count = 0;

    public function parser()
    {
        $html = $this->file_get_contents_curl('https://www.tirerack.com/content/tirerack/desktop/en/tires/by-brand.html');
        $html = HTMLDomParser::str_get_html($html);
        $aBrandLinks = $html->find('#ui-brandListBlog > ul.clearfix > a');
        $i=1;
        //раскручивание бренд листа
//        foreach ($aBrandLinks as $aBrandLink)
//        {
            //извлечение названия бренда
//            $brandName = $aBrandLink->find('img')[0]->title;
            //извлечение логотипа бренда
//            $brandImage = $this->file_get_contents_curl('https://www.tirerack.com'.$aBrandLink->find('img')[0]->src);
//            $htmlProductLink = $this->file_get_contents_curl('https://www.tirerack.com'.$aBrandLink->href);        //Ссылка на конкретный бренд
            $brandName = 'Pirelli';
            $brandImage = '';
        $htmlProductLink = $this->file_get_contents_curl('https://www.tirerack.com/tires/pirelli-tires.jsp');
        $htmlProduct = HtmlDomParser::str_get_html($htmlProductLink);
        $listColumns = $htmlProduct->find('section#productList > div.listColumns');

            //раскручивание листов со столбцами
            foreach ($listColumns as $listColumn)
            {
                //извлечение названия категорий
                $categoryName = $listColumn->find('h3')[0]->text();

                // ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ
                $column1 = $listColumn->find('.column');
                $prefCats1 = $column1[0]->find('.perf-cat');
                //раскручивание категорий первого столбца
                foreach ($prefCats1 as $prefCat1)
                {
                    $productTires = $prefCat1->find('.productTire');
                    foreach ($productTires as $productTire) {
                        $productName = $productTire->find('a')[0]->text();

                        $aProductTire = $productTire->find('a');
                        $aProductTireLink = $this->file_get_contents_curl('https://www.tirerack.com' . $aProductTire[0]->href);
                        $productDetails = HtmlDomParser::str_get_html($aProductTireLink);
//                        if ($i == 18)
//                        {
                            dd($productDetails, $aProductTireLink);
//                        }
                        $productDetails = $productDetails->find('section#product-details');
                        //извлечение подкатегории продукта
                        $subcategoryName = $productDetails[0]->find('.product-details > .perfCat > a')[0]->text();
                        $productImage = $productDetails[0]->find('.image-container > img');
                        $productImage = $this->file_get_contents_curl('https://www.tirerack.com' . $productImage[0]->src);
                        $tabbedPanelsContentGroup = $productDetails[0]->find('.TabbedPanelsContentGroup');
//                        $productDescriptions = $productDetails[0]->find('div.productDescription > div#TabbedPanels2 > div#englishCopy')[0]->outertext();

                        //извличение описания продукта
//                        if ( empty($productDescriptions) == true) {
//                            dd($productDescriptions, $productName, $i, $tabbedPanelsContentGroup);
//                        }
                        $productDescriptions = $productDetails[0]->find('div.productDescription > div#TabbedPanels2 > div#englishCopy')[0]->outertext();
                        $allP = $tabbedPanelsContentGroup[0]->find('div#englishCopy > p');

                        foreach ($allP as $p) {
                            $pOutertext = $p->outertext();
                            if (strstr($pOutertext, "img") != false) {
                                $imgSrc = $p->find('img');
                                $imgSrc = $imgSrc[0]->src;
                                $productDescriptions = str_replace($imgSrc, 'https://www.tirerack.com' . $imgSrc, $productDescriptions);
                            }
                            if (strstr($pOutertext, "href") != false) {
                                $aHref = $p->find('a');
                                $aHref = $aHref[0]->href;
                                $productDescriptions = str_replace($aHref, 'https://www.tirerack.com' . $aHref, $productDescriptions);
                            }
                        }

                        //извлечение размеров продукта в виде массива
                        $productSizes = $tabbedPanelsContentGroup[0]->find('section.size > ul > li');

                        //извлечение таблицы характеристиик в формате html
                        $specsTable = $productDetails[0]->find('div.productDescription > div#allSpecs > table.specification')[1]->outertext();
                        $this->productSave($brandName, $brandImage, $categoryName, $subcategoryName, $productName, $productImage,
                           $productDescriptions, $productSizes, $specsTable);
                    }
                }
                // ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ ПЕРВЫЙ СТОЛБЕЦ

                // ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ
                $column2 = $listColumn->find('.column-two');
                if (!empty($column2))
                {
                    $prefCats2 = $column2[0]->find('.perf-cat');
                    //раскручивание категорий первого столбца
                    foreach ($prefCats2 as $prefCat2)
                    {
                        $productTires = $prefCat2->find('.productTire');
                        foreach ($productTires as $productTire) {
                            $productName = $productTire->find('a')[0]->text();

                            $aProductTire = $productTire->find('a');
                            $aProductTireLink = $this->file_get_contents_curl('https://www.tirerack.com' . $aProductTire[0]->href);
                            $productDetails = HtmlDomParser::str_get_html($aProductTireLink);
                            $productDetails = $productDetails->find('section#product-details');
                            //извлечение подкатегории продукта
                            $subcategoryName = $productDetails[0]->find('.product-details > .perfCat > a')[0]->text();
                            $productImage = $productDetails[0]->find('.image-container > img');
                            $productImage = $this->file_get_contents_curl('https://www.tirerack.com' . $productImage[0]->src);
                            $tabbedPanelsContentGroup = $productDetails[0]->find('.TabbedPanelsContentGroup');
    //                        $productDescriptions = $productDetails[0]->find('div.productDescription > div#TabbedPanels2 > div#englishCopy')[0]->outertext();

                            //извличение описания продукта
    //                        if ( empty($productDescriptions) == true) {
    //                            dd($productDescriptions, $productName, $i, $tabbedPanelsContentGroup);
    //                        }
                            $productDescriptions = $productDetails[0]->find('div.productDescription > div#TabbedPanels2 > div#englishCopy')[0]->outertext();
                            $allP = $tabbedPanelsContentGroup[0]->find('div#englishCopy > p');

                            foreach ($allP as $p) {
                                $pOutertext = $p->outertext();
                                if (strstr($pOutertext, "img") != false) {
                                    $imgSrc = $p->find('img');
                                    $imgSrc = $imgSrc[0]->src;
                                    $productDescriptions = str_replace($imgSrc, 'https://www.tirerack.com' . $imgSrc, $productDescriptions);
                                }
                                if (strstr($pOutertext, "href") != false) {
                                    $aHref = $p->find('a');
                                    $aHref = $aHref[0]->href;
                                    $productDescriptions = str_replace($aHref, 'https://www.tirerack.com' . $aHref, $productDescriptions);
                                }
                            }

                            //извлечение размеров продукта в виде массива
                            $productSizes = $tabbedPanelsContentGroup[0]->find('section.size > ul > li');

                            //извлечение таблицы характеристиик в формате html
                            $specsTable = $productDetails[0]->find('div.productDescription > div#allSpecs > table.specification')[1]->outertext();
                            $this->productSave($brandName, $brandImage, $categoryName, $subcategoryName, $productName, $productImage,
                                $productDescriptions, $productSizes, $specsTable);
                        }
                    }
                }
                // ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ ВТОРОЙ СТОЛБЕЦ
            }
            $i++;
//        }
        dd('Парсинг прошел успешно!');
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

    function productSave($brandName, $brandImage, $categoryName, $subcategoryName, $productName, $productImage,
                         $productDescriptions, $productSizes, $specsTable){
        //id записей
        $myP = new MyParserController();
        $brandID = null;
        $sizeID = null;
        $productID = null;
        $categoryID = null;
        $subcategoryID = null;
        $productSizeID = null;

        //специальный ошибочный запрос
        $nullRequest = Brand::where('name', "=", 'wfegrhtgmjhngbfvdvgbnhfd')->get();

        $brand = Brand::where('name', "=", $brandName)->get();
        if ($brand == $nullRequest)
        {
            $brand = new Brand();
            $brand->name = $brandName;
//            $brandImageName = 'log'.uniqid().'.jpg';
//            Image::make($brandImage)->save(public_path('img/'. $brandImageName ));
            $brand->image = 'ss';
            $brand->save();
            $brand = Brand::where('name', "=", $brandName)->get();
            $brandID = $brand[0]->id;
        }
        else
        {
            $brandID = $brand[0]->id;
        }

        $category = Category::where('name', "=", $categoryName)->get();
        if ($category == $nullRequest)
        {
            $category = new Category();
            $category->name = $categoryName;
            $category->save();
            $category = Category::where('name', "=", $categoryName)->get();
            $categoryID = $category[0]->id;
        }
        else
        {
            $categoryID = $category[0]->id;
        }

        $subcategory = Subcategory::where('name', "=", $subcategoryName)->get();
        if ($subcategory == $nullRequest)
        {
            $subcategory = new Subcategory();
            $subcategory->name = $subcategoryName;
            $subcategory->category_id = $categoryID;
            $subcategory->save();
            $subcategory = Subcategory::where('name', "=", $subcategoryName)->get();
            $subcategoryID = $subcategory[0]->id;
        }
        else
        {
            $subcategoryID = $subcategory[0]->id;
        }

        $product = Product::where('name', "=", $productName)->get();
        if($product == $nullRequest)
        {
            $product = new Product();
            $product->name = $productName;
            $product->description = $productDescriptions;
            $product->specs = $specsTable;
            $product->brand_id = $brandID;
            $product->subcategory_id = $subcategoryID;
            $productImageName = uniqid().'.jpg';
            Image::make($productImage)->save(public_path('img/'. $productImageName ));
            $product->product_image = $productImageName;
            $product->save();
            $product = Product::where('name', "=", $productName)->get();
            $productID = $product[0]->id;
        }
        else
        {
            $productID = $product[0]->id;
        }

        foreach ($productSizes as $productSize)
        {

            $numberSize = substr(trim($productSize->find('.sizes')[0]->text(), " "), -2);
            $fullSize = trim($productSize->find('.sizes')[0]->text(), " ");

            $nullArrayRequest = $productSize->find('.fdgfhgjhuyftrtd');
            $servDesc = $productSize->find('.servDesc');
            if($servDesc == $nullArrayRequest)
            {
                $servDesc = "";
            }
            else
            {
                $servDesc = trim($productSize->find('.servDesc')[0]->text(), " ");
            }

            $size = Size::where('number_size', "=", $numberSize)->where('full_size', "=", $fullSize)->where('serv_desc', "=", $servDesc)->get();
            if($size == $nullRequest)
            {
                $size = new Size();
                $size->number_size = $numberSize;
                $size->full_size = $fullSize;
                $size->serv_desc = $servDesc;
                $size->save();
                $size = Size::where('number_size', "=", $numberSize)->where('full_size', "=", $fullSize)->where('serv_desc', "=", $servDesc)->get();
                $sizeID = $size[0]->id;
            }
            else
            {
                $sizeID = $size[0]->id;
            }

            $productSizeTable = Product_size::where('product_id', '=', $productID)->where('size_id', '=', $sizeID)->get();

            if($productSizeTable == $nullRequest)
            {
                $productSizeTable = new Product_size();
                $productSizeTable->product_id = $productID;
                $productSizeTable->size_id = $sizeID;
                $productSizeTable->save();
                $productSizeTable = Product_size::where('product_id', '=', $productID)->where('size_id', '=', $sizeID)->get();
                $productSizeID = $productSizeTable[0]->id;
            }
            else
            {
                $productSizeID = $productSizeTable[0]->id;
            }
        }
    }
}
