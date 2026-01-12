<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Settings::create([
                'user_id' => $user->id,
                'theme' => 'dark',
                'lang' => 'fr',
            ]);
        }
    }
}
