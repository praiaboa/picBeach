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
        $this->call('RegionsTableSeeder');
        $this->call('BeachesTableSeeder');
        $this->call('PicsTableSeeder');
        $this->call('ReviewsTableSeeder');
    }
}
