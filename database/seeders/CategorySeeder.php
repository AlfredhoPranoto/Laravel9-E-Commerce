<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryData = [
            [
                'name' => 'T-shirt',
                'description' => 'A T-shirt is a style of fabric shirt named after the T shape of its body and sleeves. Traditionally, it has short sleeves and a round neckline, known as a crew neck.',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Shoes',
                'description' => 'A shoe is an item of footwear intended to protect and comfort the human foot. Though the human foot can adapt to varied terrains and climate conditions, it is vulnerable, and shoes provide protection for human foot.',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Pants',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Necktie',
                'description' => 'A necktie, or simply a tie, is a piece of cloth worn for decorative purposes around the neck',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Bracelet',
                'description' => 'A bracelet is a chain or band, usually made of metal, which you wear around your wrist as jewellery',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Necklace',
                'description' => 'As long as it is worn around the neck, it is a necklace',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Suits',
                'description' => 'A suit, lounge suit, or business suit is a set of clothes comprising a suit jacket and trousers of identical textiles generally worn with a collared dress shirt, necktie, and dress shoes',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Belts',
                'description' => 'A belt is a loop of flexible material used to link two or more rotating shafts mechanically, most often parallel.',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Jacket',
                'description' => 'An outer garment extending either to the waist or the hips, typically having sleeves and a fastening down the fron',
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
        ];

        Category::insert($categoryData);
    }
}
