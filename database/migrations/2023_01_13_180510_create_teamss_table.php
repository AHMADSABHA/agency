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
        Schema::create('teamss', function (Blueprint $table) {
            $table->id();
            $table->string('team_det_id');
            $table->longText('image');
            $table->string('name');
            $table->string('position');
            $table->string('facebook')->nullable()->default(null);
            $table->string('twitter')->nullable()->default(null);
            $table->string('dribbble')->nullable()->default(null);
            $table->longText('discription');
            $table->string('youtube')->nullable()->default(null);
            $table->string('behance')->nullable()->default(null);
            $table->string('vemo')->nullable()->default(null);
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
        Schema::dropIfExists('teamss');
    }
};
