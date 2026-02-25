<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> 4af142184d20c2b8ba5393dd29b66ae81be58c8f
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
=======
    use WithoutModelEvents;

>>>>>>> 4af142184d20c2b8ba5393dd29b66ae81be58c8f
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
<<<<<<< HEAD
        Product::factory(8)->create();
    }
}
=======

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
>>>>>>> 4af142184d20c2b8ba5393dd29b66ae81be58c8f
