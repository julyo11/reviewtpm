<?php

use Illuminate\Database\Seeder;
use App\Warehouse;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Warehouse::create([
            'warehouse_name'=>'Warehouse 1',
            'warehouse_location'=>'Lokasi 1'
        ]);
        Warehouse::create([
            'warehouse_name'=>'Warehouse 2',
            'warehouse_location'=>'Lokasi 2'
        ]);
    }
}
