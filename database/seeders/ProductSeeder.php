<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Fanta',
                "price"=>"K10",
                "description"=>"This is a carbonated soft drink with various flavours",
                "category"=>"Drinks",
                "gallery"=>"https://www.fanta.com/content/dam/nagbrands/us/fanta/en/products/orange/desktop/Orange_Bottle_Desktop.png",
                "supplier"=>"Zambian Breweries"
            ],
            [
                'name'=>'Mirinda',
                "price"=>"K10",
                "description"=>"This is a carbonated soft drink with various flavours",
                "category"=>"Drinks",
                "gallery"=>"https://www.jiomart.com/images/product/600x600/491208776/mirinda-orange-750-ml-product-images-o491208776-p491208776-0-202203150750.jpg",
                "supplier"=>"Zambian Breweries"
            ],
            [
                'name'=>'Chicken',
                "price"=>"K100",
                "description"=>"This is a weighed bag of chicken pieces",
                "category"=>"Food",
                "gallery"=>"https://www.thespruceeats.com/thmb/J1L9iGriIjvbufcoYZJCU4RQSsM=/1500x1000/filters:no_upscale()/seasoned-oven-baked-chicken-pieces-995365-Final-5bc5fabb4cedfd002660a00f.jpg",
                "supplier"=>"ZamBeef"
            ],
            [
                'name'=>'Eggs',
                "price"=>"K60",
                "description"=>"This is a tray of 30 eggs",
                "category"=>"Food",
                "gallery"=>"https://image.shutterstock.com/image-photo/eggs-paper-tray-isolated-on-260nw-121269586.jpg",
                "supplier"=>"Cedrics Farm"
            ],
            [
                'name'=>'Sunlight',
                "price"=>"K30",
                "description"=>"This is washing powder",
                "category"=>"Detergents",
                "gallery"=>"https://bluecartzambia.com/wp-content/uploads/2020/11/Sunlight-2-in-1.jpg",
                "supplier"=>"Atheneon Wholesale"
            ]
        ]);
    }
}

