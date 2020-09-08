<?php

use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([GroupSeeder::class,PermissionSeeder::class,UserSeeder::class,CategorySeeder::class,PostSeeder::class]);        
    }
}
