<?php

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
        // $this->call(UserSeeder::class);
<<<<<<< HEAD
=======
        $this->call(RoleTableSeeder::class);//first add role table
        $this->call(UserTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(SubcategoryTableSeeder::class);
        
>>>>>>> added a new file
    }
}
