<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'              =>  'petani hebat',
            'email'             =>  'pancasila@go.id',
            'password'          =>  Hash::make('poiuytre'),
            
        ]);
    }
}
