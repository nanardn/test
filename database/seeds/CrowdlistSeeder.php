<?php

use Illuminate\Database\Seeder;

class CrowdlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(company::class, 50)->create();
    }
}
