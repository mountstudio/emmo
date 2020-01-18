<?php

namespace App\Console\Commands;

use App\Product;
use Illuminate\Console\Command;

class AddSlugToProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:slug';

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
            $product->setUpdatedAt(new \DateTime());
            $product->save();
        }

        return true;
    }
}
