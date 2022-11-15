<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'IPhone',
            'small_description' => 'IPhone product for descripton',
            'description' => '<p>IPhone product big descripton</p> ',
            'price' => '1400',
            'picture' => 'complogo05.jpg'
        ]);
        Product::create([
            'name' => 'Gnome',
            'small_description' => 'Gnome product for descripton',
            'description' => '<p>Gnome product big descripton</p> ',
            'price' => '1400',
            'picture' => 'complogo06.jpg'
        ]);
        Product::create([
            'name' => 'Gnome',
            'small_description' => 'Gnome product for descripton',
            'description' => '<p>Gnome product big descripton</p> ',
            'price' => '1400',
            'picture' => 'complogo06.jpg'
        ]);
        Product::create([
            'name' => 'OSProduct',
            'small_description' => 'OS p product for descripton',
            'description' => '<p>OS product product big descripton</p> ',
            'price' => '1400',
            'picture' => 'complogo07.jpg'
        ]);
    }
}
