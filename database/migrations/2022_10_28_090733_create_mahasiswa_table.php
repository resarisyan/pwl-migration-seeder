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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->char('npm', 10);
            $table->char('nidn', 10);
            $table->string('nama', 50);
            $table->foreign('nidn')->references('nidn')->on('dosens')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->primary('npm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
};
