<?php

namespace Database\Seeders;
use App\Models\ProductOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductOrder::create([
            'name' => 'Commande produit',
            'price' => 49.99,
        ]);
    }
}
