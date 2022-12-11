<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Posty;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => password_hash('test', PASSWORD_DEFAULT),
        ]); */
        /* Posty::factory()->create([
            'tytul' => 'Tytuł postu seed 2',
            'autor' => 'Tester 2',
            'email' => 'test2@test.pl',
            'tresc' => 'Tekst treści seedowanej 2',
            'created_at' => now(),
        ]); */
        //\App\Models\User::factory(5)->create();
        $this->call(PostyTableSeeder::class);
    }
}
