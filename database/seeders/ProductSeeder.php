<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Маргарита', 'description' => 'Томатный соус, моцарелла, базилик', 'price' => 450.00, 'type' => 'pizza', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Пепперони', 'description' => 'Томатный соус, моцарелла, пепперони', 'price' => 550.00, 'type' => 'pizza', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Четыре сыра', 'description' => 'Моцарелла, пармезан, горгонзола, чеддер', 'price' => 600.00, 'type' => 'pizza', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Кока-Кола', 'description' => '0.5 л', 'price' => 150.00, 'type' => 'drink', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Сок апельсиновый', 'description' => '0.3 л', 'price' => 120.00, 'type' => 'drink', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Вода минеральная', 'description' => '0.5 л', 'price' => 80.00, 'type' => 'drink', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}