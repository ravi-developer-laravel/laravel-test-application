<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Post::factory(96)->create();
        \App\Models\Website::factory(78)->create();
        \App\Models\Subscriber::factory(45)->create();
        \App\Models\WebsiteSubscriber::factory(56)->create();
    }
}