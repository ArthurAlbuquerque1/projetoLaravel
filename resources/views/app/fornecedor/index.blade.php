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

      @forelse ($fornecedores as $indice => $fornecedor )
      
        Iteração atual: {{$loop->iteration}}
        <br>
        Fornecedor: {{$fornecedor['nome']}}
        <br>
        Status: {{$fornecedor['status']}}
        <br>
        CNPJ: {{$fornecedor['CNPJ']}}
        <br>
        Telefone: {{$fornecedor['ddd'] ?? '' }} {{$fornecedor['telefone'] ?? '' }}
        <br>
         @if ($loop->first)
            First interation           
        @endif

        @if ($loop->last)
            Last interation

            <br>
            Total de registros: {{$loop->count}}

        @endif
        <hr>
      @empty
          Não existem fornecdores cadastrados!
      @endforelse
@endisset
   
