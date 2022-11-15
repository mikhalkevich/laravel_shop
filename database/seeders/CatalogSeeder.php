<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catalog::create([
            'name' => 'Business City',
            'small_description' => 'Web Development',
            'description' => 'Web Development',
            'picture' => 'assets/img/portfolio/1.jpg',
            'filters' => 'filter-app'
        ]);
        Catalog::create([
            'name' => 'Blue Sea',
            'small_description' => 'Photosho',
            'description' => 'Photosho',
            'picture' => 'assets/img/portfolio/2.jpg',
            'filters' => 'filter-web filter-app'
        ]);
        Catalog::create([
            'name' => 'Blue Sea',
            'small_description' => 'Photosho',
            'description' => 'Photosho',
            'picture' => 'assets/img/portfolio/3.jpg',
            'filters' => 'filter-web filter-app'
        ]);
        Catalog::create([
            'name' => 'Blue Sea',
            'small_description' => 'Photosho',
            'description' => 'Photosho',
            'picture' => 'assets/img/portfolio/4.jpg',
            'filters' => 'filter-web filter-card'
        ]);
        Catalog::create([
            'name' => 'Beautiful Flower',
            'small_description' => 'Photosho',
            'description' => 'Photosho',
            'picture' => 'assets/img/portfolio/5.jpg',
            'filters' => 'filter-card'
        ]);
        Catalog::create([
            'name' => 'Night Hill',
            'small_description' => 'Night Hill Photosho',
            'description' => 'Photosho',
            'picture' => 'assets/img/portfolio/6.jpg',
            'filters' => 'filter-web'
        ]);
    }
}
