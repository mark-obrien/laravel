<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->truncate();

        Role::create([
            'id'            => 1,
            'name'          => 'Administrator',
        ]);
        Role::create([
            'id'            => 2,
            'name'          => 'Manager',
        ]);
        Role::create([
            'id'            => 3,
            'name'          => 'Employee',
        ]);
        Role::create([
            'id'            => 4,
            'name'          => 'Client',
        ]);
    }
}
