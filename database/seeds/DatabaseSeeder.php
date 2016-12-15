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
      $this->call(UserTypesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(PropertyTypesTableSeeder::class);
      $this->call(BusinessTypesTableSeeder::class);
      $this->call(PropertiesTableSeeder::class);
      $this->call(ProjectsTableSeeder::class);
    }
}
