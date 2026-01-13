<?php

namespace Database\Seeders;
use App\Models\SubscriptionOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        SubscriptionOrder::create([
            'name' => 'Abonnement Premium',
            'price' => 19.99,
            'duration_months' => 12,
        ]);
    }
}
