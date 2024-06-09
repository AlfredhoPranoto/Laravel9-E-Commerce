<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productData = [
            [
                'name' => 'Pants',
                'price' => 250000,
                'description' => 'Dark Pants with best quality',
                'sale_price' => 130000,
                'image' => 'Pants-1712567177.jpeg',
                'category_id' => 3
            ],
            [
                'name' => 'Black Shoes',
                'price' => 450000,
                'description' => 'New Black Shoes',
                'sale_price' => 400000,
                'image' => 'Black Shoes-1712049524.jpeg',
                'category_id' => 2
            ],
            [
                'name' => 'Blue Niek Shoes',
                'price' => 600000,
                'description' => 'New Blue Niek Shoes',
                'sale_price' => 450000,
                'image' => 'Blue Niek Shoes-1712049615.png',
                'category_id' => 2
            ],
            [
                'name' => 'Black T-Shirt',
                'price' => 240000,
                'description' => 'New Black T-shirt',
                'sale_price' => 150000,
                'image' => 'Black T-Shirt-1712049650.avif',
                'category_id' => 1
            ],
            [
                'name' => 'Brown Pants',
                'price' => 760000,
                'description' => 'New Brown Pants',
                'sale_price' => 550000,
                'image' => 'Brown Pants-1712049698.jpeg                ',
                'category_id' => 3
            ],
            [
                'name' => 'Grey Pants',
                'price' => 860000,
                'description' => 'New Grey Pants on sale',
                'sale_price' => 700000,
                'image' => 'Grey Pants-1712049765.avif',
                'category_id' => 3
            ],
            [
                'name' => 'The Boys',
                'price' => 650000,
                'description' => 'The Boys T-Shirt 100% Original',
                'sale_price' => 470000,
                'image' => 'The Boys-1712128103.jpeg',
                'category_id' => 1
            ],
            [
                'name' => 'Dark Blue Cotton',
                'price' => 300000,
                'description' => 'Dark Blue T-shirt with best quality',
                'sale_price' => 200000,
                'image' => 'Dark Blue Cotton-1712128184.jpeg',
                'category_id' => 1
            ],
            [
                'name' => 'Cool Black',
                'price' => 250000,
                'description' => 'Cool Black Shirt will looks coo',
                'sale_price' => 160000,
                'image' => 'Cool Black-1712128215.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Yellow Cool',
                'price' => 90000,
                'description' => 'Yellow Cool Shirt & very funNew Blue Niek Shoes',
                'sale_price' => 60000,
                'image' => 'Yellow Cool-1712128287.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Vertical Boxing',
                'price' => 50000,
                'description' => 'T-Shirt for those who love boxing',
                'sale_price' => 30000,
                'image' => 'Vertical Boxing-1712222529.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Aquatic Blue',
                'price' => 70000,
                'description' => 'T-shirt with best aquatic color',
                'sale_price' => 50000,
                'image' => 'Aquatic Blue-1712222583.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Lorem Ipsum',
                'price' => 90000,
                'description' => 'Lorem Ipsum, Lorem Ipsum',
                'sale_price' => 75000,
                'image' => 'Lorem Ipsum-1712222615.jpg',
                'category_id' => 1
            ],
            [
                'name' => 'Blue New Shirt',
                'price' => 200000,
                'description' => 'T-Shirt for those who love boxing',
                'sale_price' => 140000,
                'image' => 'Blue New Shirt-1714380575.jpeg',
                'category_id' => 1
            ],
            [
                'name' => 'Red Tie',
                'price' => 170000,
                'description' => 'A very red tie with an elegant design',
                'sale_price' => 140000,
                'image' => 'Red Tie-1714719106.jpg',
                'category_id' => 4
            ],
            [
                'name' => 'Black Suits with Tie',
                'price' => 1200000,
                'description' => 'Good Black Suits for Meeting and A Tie',
                'sale_price' => 800000,
                'image' => 'Black Suits with Tie-1714719318.jpg',
                'category_id' => 7
            ],
            [
                'name' => 'Very Black Suits with Handkerchief',
                'price' => 1500000,
                'description' => 'Very High Quality Suits, imported from singapore',
                'sale_price' => 1200000,
                'image' => 'Very Black Suits with Handkerchief-1714719628.jpeg',
                'category_id' => 7
            ],
            [
                'name' => 'Love Gold Bracelet',
                'price' => 800000,
                'description' => 'Bracelet with 24k Gold',
                'sale_price' => 650000,
                'image' => 'Love Gold Bracelet-1714719695.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'Cool Bracelet',
                'price' => 600000,
                'description' => 'Very Cool Bracelet that was made in Indonesia',
                'sale_price' => 400000,
                'image' => 'Cool Bracelet-1714719757.jpg',
                'category_id' => 5
            ],
            [
                'name' => 'Brown Belt',
                'price' => 800000,
                'description' => 'Brown Belt made from bear fur. Very soft belt',
                'sale_price' => 500000,
                'image' => 'Brown Belt-1714719789.jpeg',
                'category_id' => 8
            ],
            [
                'name' => 'Black Belt',
                'price' => 770000,
                'description' => 'Black Belt, a bit hard and very cool looking',
                'sale_price' => 600000,
                'image' => 'Black Belt-1714719907.jpeg',
                'category_id' => 8
            ],
            [
                'name' => 'Love Red Necklace',
                'price' => 700000,
                'description' => 'Pure Love Necklace for your partner',
                'sale_price' => 450000,
                'image' => 'Love Red Necklace-1714720039.jpeg',
                'category_id' => 6
            ],
            [
                'name' => 'Ruby Love Necklace',
                'price' => 1700000,
                'description' => 'Necklace made of pure ruby material',
                'sale_price' => 1400000,
                'image' => 'Ruby Love Necklace-1714720086.jpeg',
                'category_id' => 6
            ]
        ];

        Product::insert($productData);
    }
}
