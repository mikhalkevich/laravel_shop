<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maintext;

class MaintextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintext::create([
            'name' => 'About company',
            'body' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.',
            'url' => 'about_company',
            'status' => 'main_about'
        ]);
        Maintext::create([
            'name' => 'information',
            'body' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
Тут контакты ',
            'url' => 'info_company',
            'status' => 'main_info'
        ]);
        Maintext::create([
            'name' => 'Rules',
            'body' => 'Information about rules',
            'url' => 'rules',
            'status' => 'main'
        ]);
        Maintext::create([
            'name' => 'Othes',
            'body' => 'Others about rules',
            'url' => 'other',
            'status' => 'main'
        ]);
    }
}
