<?php

namespace Database\Seeders;

class DatabaseSeeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        (new TaskSeeder())->run();
    }
}
