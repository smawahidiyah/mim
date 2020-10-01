<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaDidiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_didiks', function (Blueprint $table) {
            $table->id();
            $table->integer('NIPD')->nullable();
            $table->string('namapd', 200)->nullable();
            $table->unsignedBigInteger('tingkat_id');
            $table->timestamps();
            $table->foreign('tingkat_id')->references('id')->on('tingkats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_didiks');
    }
}
