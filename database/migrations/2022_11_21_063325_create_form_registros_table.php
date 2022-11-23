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
        Schema::create('form_registros', function (Blueprint $table) {
            $table->id();
            $table->string('proyecto');
            $table->string('tipo');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('correo');
            $table->timestamps(); //created_at or //updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_registros');
    }
};
