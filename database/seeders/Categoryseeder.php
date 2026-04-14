<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoryseeder extends Seeder
{
   
    public function run(): void
    {
        $categories = [
            [
                'cat_name' => 'Makanan',
                'description' => 'Kategori untuk makanan',
            ],
            [
                'cat_name' => 'Minuman',
                'description' => 'Kategori untuk minuman',
            ],
          
        ];

        DB::table('categories')->insert($categories);
    }
}
