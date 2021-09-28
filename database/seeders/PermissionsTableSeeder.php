<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name' => 'cadastrar_produto' // 1
            ],
            [
                'name' => 'editar_produto' // 2
            ],
            [
                'name' => 'ver_produto' // 3
            ],
            [
                'name' => 'excluir_produto' // 4
            ],
            [
                'name' => 'alterar_estoque' // 5
            ],
            [
                'name' => 'realizar_vendas' // 6
            ],
        ]);
    }
}
