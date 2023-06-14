<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('produto_detalhes', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('produto_id'); //por convenção quando definimos uma chave estrangeira  utilizamos "'produto_id'" o singular do nome da tabela e o nome a coluna que guarda a chave primaria da tabela
      $table->float('comprimento', 8, 2);
      $table->float('largura', 8, 2);
      $table->float('altura', 8, 2);
      $table->timestamps();

      //constraint
      $table->foreign('produto_id')->references('id')->on('produtos');
      $table->unique('produto_id');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('produto_detalhes');
  }
};
