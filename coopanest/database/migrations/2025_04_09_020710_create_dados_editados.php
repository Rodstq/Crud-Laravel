<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_editados', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('e-mail');
            $table->char('telefone', 11);
            $table->integer('idade');
            $table->char('cpf', 11)->unique();
            $table->string('escolaridade');
            $table->decimal('altura',total: 3, places: 2);
            $table->decimal('peso',total: 5, places: 2);
            $table->boolean('possui_filhos');
            $table->timestamps('atualizado em');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_editados');
    }
};
