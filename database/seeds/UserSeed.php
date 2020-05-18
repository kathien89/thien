<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$J/bJgD.RP.APnByflfl2Le/xeBjFQOVRtkHvBJue.xzxWkcT3LhQu', 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
