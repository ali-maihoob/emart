<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use App\Constants\UserConstants;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //Admin
            [
                'full_name' => 'Ali Maihoob',
                'username' => 'Admin',
                'email' => 'admin@emart.com',
                'password' => Hash::make('123456'),
                'role' => UserConstants::ROLE_ADMIN,
                'status' => UserConstants::STATUS_ACTIVE
            ],
            //Vendor
            [
                'full_name' => 'Ali Vendor',
                'username' => 'Vendor',
                'email' => 'vendor@emart.com',
                'password' => Hash::make('123456'),
                'role' => UserConstants::ROLE_VENDOR,
                'status' => UserConstants::STATUS_ACTIVE
            ],
            //Customer
            [
                'full_name' => 'Ali Customer',
                'username' => 'Customer',
                'email' => 'customer@emart.com',
                'password' => Hash::make('123456'),
                'role' => UserConstants::ROLE_CUSTOMER,
                'status' => UserConstants::STATUS_ACTIVE
            ],
        ]);
    }
}
