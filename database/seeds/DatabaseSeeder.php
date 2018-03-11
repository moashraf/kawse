<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  //  $this->call(slidersseeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
