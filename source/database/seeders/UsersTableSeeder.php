<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert(
            [
                'email' => 'datnguyen199794@gmail.com',
            ],
            [
                'password' => Hash::make("123456"),
                'first_name' => 'Dat',
                'last_name' => 'Nguyen',
                'role' => USER_ROLE['ADMIN'],
                'gender' => GENDER['MALE'],
                'status' => USER_STATUS['ACTIVE'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
