<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  public function index()
  {
    $fornecedores = [
      0 => [
        'nome' => 'Fornecedor1',
        'status' => 'N',
        'CNPJ' => '0',
        'ddd' => '83', // João Pessoa (PB)
        'telefone' => '000-0000'
      ],
      1 => [
        'nome' => 'Fornecedor 2',
        'status' => 'S',
        'CNPJ' => '123456',
        'ddd' => '31', // Belo Horizonte (MG)
        'telefone' => '000-0000'
      ],
      2 => [
        'nome' => 'Fornecedor 3',
        'status' => 'S',
        'CNPJ' => '0',
        'ddd' => '11', // São Paulo (SP)
        'telefone' => '000-0000'
      ]

    ];


    return view('app.fornecedor.index', compact('fornecedores'));
  }
}
