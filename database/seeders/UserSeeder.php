<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $user1 = User::create([
            'name' => 'Luis Gabriel',
            'apellido' => 'Coaquira Calloapaza',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);
        $user1->assignRole('Administrador');

        $user2 = User::create([
            'name' => 'Thomas Ricardo',
            'apellido' => 'Torre Quispe',
            'email' => 'tecnico@tecnico.com',
            'password' => bcrypt('12345678'),
        ]);
        $user2->assignRole('Técnico');

        $user3 = User::create([
            'name' => 'Elisa Luz',
            'apellido' => 'Navarro Llanos',
            'email' => 'atencion@atencion.com',
            'password' => bcrypt('12345678'),
        ]);
        $user3->assignRole('Oficina');
    }
}
