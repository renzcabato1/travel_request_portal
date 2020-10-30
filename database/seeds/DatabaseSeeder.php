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
      
            $this->call('CompaniesTableSeeder');
            $this->call('DestinationsTableSeeder');
            $this->call('RolesTableSeeder');
            $this->call('UsersTableSeeder');
    }
    
}
