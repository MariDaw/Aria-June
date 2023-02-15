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
        Schema::create('usuario_publicacions', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('publicacion_id')->constrained('publicacions');
            $table->primary(['user_id', 'publicacion_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_publicacions');
    }
};
