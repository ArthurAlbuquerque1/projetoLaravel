<?php

namespace Database\Seeders;

use App\SiteContato;
use Illuminate\Database\Seeder;




class SiteContatoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    /*
    $contato = new SiteContato();
    $contato->nome = 'Sistema SG';
    $contato->telefone = '(11) 99999-8888';
    $contato->email = 'contato@sg.com.br';
    $contato->motivo_contato = 1;
    $contato->mensagem = 'Seja bem-vindo';
    $contato->save();
    */
    \App\SiteContato::factory()->count(100)->create();
  }
}