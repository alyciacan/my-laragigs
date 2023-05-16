<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();

        Listing::create([
          'title' => 'Laravel Senior Developer',
          'tags' => 'laravel, javascript',
          'company' => 'Acme Corporation',
          'location' => 'Seattle, WA',
          'email' => 'email@email.com',
          'website' => 'https://www.acme.com',
          'description' => 'Seeking an experienced Laravel Developer with 5+ years of experience. Excellent pay and benefits. Prefer candidates who can work hybrid schedule.'
        ]);

        Listing::create([
          'title' => 'Junior React Developer',
          'tags' => 'react, javascript',
          'company' => 'FakerPro',
          'location' => 'Kirkland, WA',
          'email' => 'email@faker.com',
          'website' => 'https://www.faker.com',
          'description' => 'Opening for a junior React developer. 0-1 years of experience, prefer candidates who can work in-person. Pay is $90-$95k with benefits.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
