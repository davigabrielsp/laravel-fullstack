<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornededor = new Fornecedor();
        $fornededor->nome = 'jose';
        $fornededor->site = 'www.jose.com.br';
        $fornededor->uf = 'rj';
        $fornededor->email = 'jose@gmail.com';
        $fornededor->save();

        Fornecedor::create([
            'nome' => 'Admin2',
            'email' => 'admin2@gmail.com',
            'uf' => 'SP',
            'site' => 'admin2.com.br'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Admin3',
            'email' => 'admin3@gmail.com',
            'uf' => 'MG',
            'site' => 'admin3.com.br'
        ]);
    }
}
