<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
            "name" => "LG Mobile",
            "price" => "200",
            "description" => "4 GB",
            "Category" => "Mobile",
            "gallery" => "https://www.lg.com/in/images/mobile-phones/md07523361/LMK610IM-350.jpg"
            ],
            [
            "name" => "OPPO Mobile",
            "price" => "300",
            "description" => "3 GB",
            "Category" => "Mobile",
            "gallery" => "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a15s/navigation/A15s-navigation-silver1-v2.png"
            ],
            [
            "name" => "ONE PLUS Mobile",
            "price" => "800",
            "description" => "8 GB",
            "Category" => "Mobile",
            "gallery" => "https://tiimg.tistatic.com/fp/1/006/541/oneplus-mobile-phone-nord-128gb-8gb-ram-ac2001--009.jpg"
            ],
            [
            "name" => "APPLE Mobile",
            "price" => "1000",
            "description" => "2 GB",
            "Category" => "Mobile",
            "gallery" => "https://static.toiimg.com/thumb/msid-78671027,width-240,resizemode-4/Apple-iPhone-12-Pro.jpg"
            ],
            [
            "name" => "HONOR Mobile",
            "price" => "500",
            "description" => "6 GB",
            "Category" => "Mobile",
            "gallery" => "https://www.androidcentral.com/sites/androidcentral.com/files/article_images/2020/01/honor-20-render.jpg"
            ]
        ]);
    }
}
