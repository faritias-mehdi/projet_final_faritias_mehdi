<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::insert([
            [
                'titre' => 'gaming chair razer',
                'prix' => 5110,
                'image' => 'a.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'gaming chair',
                'prix' => 1150,
                'image' => 'b.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'gaming chair',
                'prix' => 1550,
                'image' => 'c.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'gaming chair',
                'prix' => 7150,
                'image' => 'd.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'gaming chair',
                'prix' => 4250,
                'image' => 'e.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'gaming chair',
                'prix' => 1350,
                'image' => 'f.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'g.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'h.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'i.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'j.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],

            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'k.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
            [
                'titre' => 'p1',
                'prix' => 50,
                'image' => 'l.jpg',
                'stock' => 10,
                'brand' => 'chair',
            ],
          

        ]);
    }
}
