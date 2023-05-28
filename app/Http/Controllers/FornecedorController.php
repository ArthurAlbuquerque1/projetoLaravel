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
        'CNPJ' => '00'
      ],
      1 => [
        'nome' => 'Fornecedor 2',
        'status' => 'S',
      ]
    ];

    /* 
        condição ? se verdade : se falso; 
        condição ? se verdade : (condição ? se verdade : se falso);
    */

    echo isset($fornecedores[0]['CNPJ']) ? 'CNPJ informado' : 'CNPJ não informado';

    return view('app.fornecedor.index', compact('fornecedores'));
  }
}
