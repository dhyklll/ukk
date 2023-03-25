<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nik' => '123',
            'name' => 'masyarakat',
            'username' => 'masyarakat',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Pria',
            'alamat' => 'KP.Cimalati RT03/RW02',
            'phone' => '081377521',
            'role' => 'masyarakat'
        ]);

        User::insert([
            'nik' => '345',
            'name' => 'petugas',
            'username' => 'petugas',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Pria',
            'alamat' => 'KP.Cimalati RT01/RW02',
            'phone' => '081377529',
            'role' => 'petugas'
        ]);

        User::insert([
            'nik' => '567',
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'jenis_kelamin' => 'Pria',
            'alamat' => 'KP.Cimalati RT02/RW02',
            'phone' => '081377581',
            'role' => 'admin'
        ]);
    }
}
