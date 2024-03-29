<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //instanciando o objeto
    $fornecedor = new Fornecedor();
    $fornecedor->nome = 'Fornecedor 100';
    $fornecedor->site = 'fornecedor100.com.br';
    $fornecedor->uf = 'CE';
    $fornecedor->email = 'contato@fornecedor100.com.br';
    $fornecedor->save();


    //o metodo create
    Fornecedor::create([
      'nome' => 'Fornecedor 200',
      'site' => 'fornecedor200.com.br',
      'uf' => 'PB',
      'email' => 'contato@fornecedor200.com.br',
    ]);

    //insert
    DB::table('fornecedores')->insert([
      'nome' => 'Fornecedor 300',
      'site' => 'fornecedor300.com.br',
      'uf' => 'PE',
      'email' => 'contato@fornecedor300.com.br',
    ]);
  }
}
