<h3>Fornecedor</h3>

@php
/*
if(empty($variavel)) {} //retornar true se a variavel estiver vazia
- ''
- 0
- 0.0
- null
- false
- array()
- $var
*/
@endphp

@isset($fornecedores)
    Fornecedor: {{$fornecedores[2]['nome']}}
    <br>
    Status: {{$fornecedores[2]['status']}}
    <br>
    CNPJ: {{$fornecedores[2]['CNPJ']}}
    <br>
    Telefone: {{$fornecedores[2]['ddd'] ?? '' }} {{$fornecedores[2]['telefone'] ?? '' }}
    @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('31')
            Belo Horizonte - MG
            @break
        @case('83')
            João Pessoa - PB
            @break
        @default
            Estado não identificado
    @endswitch

@endisset