<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\SubscriptionOrder;
use App\Models\User;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if (! $user) {
            return;
        }

        $productOrder = ProductOrder::first();

        if ($productOrder) {
            Order::create([
                'user_id' => $user->id,
                'amount' => $productOrder->price,
                'status' => 'paid',
                'orderable_id' => $productOrder->id,
                'orderable_type' => ProductOrder::class,
            ]);
        }

        $subscriptionOrder = SubscriptionOrder::first();

        if ($subscriptionOrder) {
            Order::create([
                'user_id' => $user->id,
                'amount' => $subscriptionOrder->price,
                'status' => 'paid',
                'orderable_id' => $subscriptionOrder->id,
                'orderable_type' => SubscriptionOrder::class,
            ]);
        }
    }
}
