<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;

class OptimizeProductImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:optimize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $products = Product::all();

        foreach ($products as $product) {
            Image::make(public_path('img/'.$product->product_image))
                ->resize('200', null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save(public_path('img/small/'.$product->product_image));
        }

        return true;
    }
}
