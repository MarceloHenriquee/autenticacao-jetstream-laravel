<?php

namespace Database\Seeders;

use App\models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            [
                'name' => 'Vendedor'
            ],
            [
                'name' => 'Estoquista'
            ],
            [
                'name' => 'Gerente'
            ],
        ]);
    }
}
