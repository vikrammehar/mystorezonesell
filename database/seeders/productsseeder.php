<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            ["name"=>"SAMSUNG galaxy F12",
            "price"=>"12000 rs",
            "gallery"=>"https://th.bing.com/th/id/OIP.uHB7caGfmosEXOXm8ix9IwHaJ0?w=132&h=180&c=7&r=0&o=5&pid=1.7",
            "discount"=>"20% off",
            "description"=>"All new smart android one smart phone"],
            [
               "name"=>"MI Smart-TV",
            "price"=>"15000 rs",
            "gallery"=>"https://assets.mspimages.in/wp-content/uploads/2021/08/Mi-TV-4C-32-inch.jpg",
            "discount"=>"25% off",
            "description"=>"All new smart android one smart TV"
            ],
            [
                "name"=>"Fridge double door",
            "price"=>"12000 rs",
            "gallery"=>"https://th.bing.com/th/id/OIP.OW-0Ce2kdHO4tU3GT5tYNwHaNK?rs=1&pid=ImgDetMain",
            "discount"=>"30% off",
            "description"=>"All new latest ice-tech. fridge"
            ],
            [
                "name"=>"ACER laptop",
                "price"=>"42000 rs",
                "gallery"=>"https://th.bing.com/th/id/OIP.9H-d1ZQykmX5FdJzbHjy3AHaGk?rs=1&pid=ImgDetMain",
                "discount"=>"25% off",
                "description"=>"All new i5 4gb ram laptop"
            ],
            [
                "name"=>"girls Dress",
                "price"=>"2500 rs",
                "gallery"=>"https://th.bing.com/th/id/OIP.r8NLDQgSzMYU3o5dEJbxtQHaL8?rs=1&pid=ImgDetMain",
                "discount"=>"20% off",
                "description"=>"Stylish girl dress for smart girl look"
            ],
            [
                "name"=>"Kids wear",
                "price"=>"2500 rs",
                "gallery"=>"https://source.unsplash.com/300x400/?kidsdress",
                "discount"=>"20% off",
                "description"=>"All items up to  40 % offer close now"
            ],
            [
                "name"=>"Girls wear",
                "price"=>"2500 rs",
                "gallery"=>"https://source.unsplash.com/300x400/?girlsdress",
                "discount"=>"55% off",
                "description"=>"New designing clothes for smart girls."
            ],
            [
                "name"=>"Mens wear",
                "price"=>"1500 rs",
                "gallery"=>"https://source.unsplash.com/300x400/?mendress",
                "discount"=>"30% off",
                "description"=>"New designing clothes for smart Men."
            ],
            [
                "name"=>"Womens, wear",
                "price"=>"1500 rs",
                "gallery"=>"https://source.unsplash.com/300x400/?womendress,indian",
                "discount"=>"40% off",
                "description"=>"New designing clothes for indian women."
            ],
            [
                "name"=>"Electronics item",
                "price"=>"15000 rs",
                "gallery"=>"https://i.pinimg.com/originals/fe/a3/e5/fea3e5340bed328a2c017a0e6ef19ad0.jpg",
                "discount"=>"20% off",
                "description"=>"New technolgy home electronics items."
            ],
            [
                "name"=>"Mobile laptop",
                "price"=>"13000 rs",
                "gallery"=>"https://www.bhphotovideo.com/images/images2500x2500/acer_nx_hs5aa_004_aspire_3_core_i5_1035g1_1566184.jpg",
                "discount"=>"40% off",
                "description"=>"New technolgy home electronics items."
            ],
        ]);
    }
}
