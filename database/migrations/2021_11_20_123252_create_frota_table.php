<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frota', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->integer('ano');
            $table->string('modelo');
            $table->text('observacao')->nullable;

            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')
                ->references('id')
                    ->on('users');

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
        Schema::dropIfExists('frota');
    }
}
