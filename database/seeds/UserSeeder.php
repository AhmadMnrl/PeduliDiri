<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nik' => '320101124',
            'nama' => 'ahmad',
            'telp' => '085719127681',
            'username' => 'ahmad',
            'email' => 'serigalaberbulu465@gmail.com',
            'password' => Hash::make('ahmad'),
            'remember_token' => Str::random(32),
            'role' => 'admin'

        ]);
    }
}
