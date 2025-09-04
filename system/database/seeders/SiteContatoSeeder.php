<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->nome = "Admin2";
        // $contato->telefone = "2222222222";
        // $contato->email = "admin2@gmail.com";
        // $contato->mensagem = "222";
        // $contato->motivo_contato = 2;
        // $contato->save();

        SiteContato::factory()->count(50)->create();
    }
}
