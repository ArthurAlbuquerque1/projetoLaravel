<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



//Site_Contato

class SiteContato extends Model
{
  protected $table = 'Site_Contatos';
  protected $fillable = [
    'name',
    'telefone',
    'email',
    'motivo_contato',
    'mensagem',
  ];
}
