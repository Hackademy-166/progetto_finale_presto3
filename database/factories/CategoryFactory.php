<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $categories = [
            ['category_name' => 'Elettrodomestici'],
            ['category_name' => 'Abbigliamento'],
            ['category_name' => 'Accessori'],
            ['category_name' => 'Scarpe'],
            ['category_name' => 'Attrezzatura Sportiva'],
            ['category_name' => 'Vinili'],
            ['category_name' => 'Veicoli'],
            ['category_name' => 'Collezionismo'],
            ['category_name' => 'Console'],
            ['category_name' => 'Videogiochi'],
            ['category_name' => 'Offerte di Lavoro'],
            ['category_name' => 'Mobili'],
        ];

        static $i = 0;
        $category = $categories[$i % count($categories)];
        $i++;

        return[
            'category_name' => $category['category_name']
        ];


    }
}
