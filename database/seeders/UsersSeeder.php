<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => 'Usuário ' . $i,
                'email' => 'fulano' . $i . '@example.com',
                'numero' => '10101' . $i ,
                'password' => Hash::make('12345678'), // Altere conforme necessário
                'curso'=> 'IGF',
                'ano'=>'3'
            ]);
        }
    }
}
