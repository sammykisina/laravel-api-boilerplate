<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder {
    public function run(): void {
        User::factory(10)->create([
            'name' => 'Sammy Kisina',
            'email' => 'sammy.k.mutua@gmail.com'
        ]);
    }
}
