<?php

namespace App\Console\Commands;

use App\Brand;
use Illuminate\Console\Command;

class AddSlugToBrands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brands:slug';

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
        $brands = Brand::all();

        foreach ($brands as $brand) {
            $brand->setUpdatedAt(new \DateTime());
            $brand->save();
        }

        return true;
    }
}
