<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Yovan Ramon Yaune Enovore';
        $admin->email = 'admin@eshora.bo';
        $admin->password = Hash::make('321654987@'); // cambia "contraseña" por la contraseña que desees
        $admin->role = 'Administrador';
        $admin->celular = '9173467157';
        $admin->fecha_nacimiento = '1999-12-04';
        $admin->cedula = '65983214';
        $admin->codigo_ciudad = '56';
        $admin->save();
    }
 }
