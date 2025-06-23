<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaborateur_id');
            $table->string('action'); // 'login' ou 'logout'
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('collaborateur_id')->references('id')->on('collaborateurs')->onDelete('cascade');

            $table->foreign('collaborateur_id')
                ->references('id')
                ->on('collaborateurs')
                ->onDelete('cascade');
        });
    }
    /**

    Reverse the migrations.*
    @return void*/
    public function down(){Schema::dropIfExists('logs');}

    /**
     * Reverse the migrations.
     */

};
