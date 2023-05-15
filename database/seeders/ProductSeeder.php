<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Plimsols',
            'description' => 'Headphone yang buat pikiran kamu terbang ke angkasa (bukan mabok ya)',
            'category_id' => '1',
            'price' => '400',
            'stock' => '999',
            'image' => 'hetset pon blutut.webp'
        ]);

        Product::create([
            'name' => 'Glimsols',
            'description' => 'Hengset Geming yang bisa ngasih auto headshot di valorant (ini cit)',
            'category_id' => '2',
            'price' => '700',
            'stock' => '999',
            'image' => 'hetset geming.webp'
        ]);

        Product::create([
            'name' => 'Bless EarBuds',
            'description' => "Ini Earbuds. karna kata 'Earbuds' itu keren, jadi kumahalin deh",
            'category_id' => '4',
            'price' => '1100',
            'stock' => '999',
            'image' => 'earset blutut.webp'
        ]);

        Product::create([
            'name' => 'Tpossr',
            'description' => 'Gak ngerti beda TWS sama Earbuds itu apaan, harga? TWS ku murahin deh',
            'category_id' => '4',
            'price' => '500',
            'stock' => '999',
            'image' => 'tws.webp'
        ]);

        Product::create([
            'name' => 'Speaker Neon',
            'description' => 'Speaker asik buat nonton video Jedag Jedug sakit mata di tiktok',
            'category_id' => '3',
            'price' => '500',
            'stock' => '999',
            'image' => 'speaker.webp'
        ]);

        Product::create([
            'name' => 'YSS',
            'description' => 'Gak ngerti kenapa toko akustik jualan jam',
            'category_id' => '5',
            'price' => '10',
            'stock' => '999',
            'image' => 'smartwatch.webp'
        ]);
    }
}
