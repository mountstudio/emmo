<?php

namespace App\Console\Commands;

use App\Subcategory;
use Illuminate\Console\Command;

class AddSlugToSubcategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subcategories:slug';

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
        $products = Subcategory::all();

        foreach ($products as $product) {
            $product->setUpdatedAt(new \DateTime());
            $product->save();
        }

        return true;
    }
}
