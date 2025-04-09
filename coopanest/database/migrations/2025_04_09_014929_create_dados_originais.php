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
        Schema::create('dados_originais', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('nome')->nullable(false);
            $table->string('e-mail')->nullable(false);
            $table->char('telefone', 11)->nullable(false);
            $table->integer('idade')->nullable(false);
            $table->char('cpf', 11)->nullable(false)->unique();
            $table->string('escolaridade')->nullable(false);
            $table->decimal('altura',total: 3, places: 2)->nullable(false);
            $table->decimal('peso',total: 5, places: 2)->nullable(false);
            $table->boolean('possui_filhos')->nullable(false);
            $table->timestamps('criado em');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_originais');
    }
};
