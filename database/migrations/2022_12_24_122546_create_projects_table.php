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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('project_id');
            $table->longText('cover_image');
            $table->string('title');
            $table->string('subtitle');
            $table->text('client');
            $table->string('location');
            $table->text('project_url')->nullable();
            $table->text('description');
            $table->text('title2');
            $table->text('description2');
            $table->longText('image');
            $table->date('project_date');
            $table->text('title3')->nullable()->default(null);
            $table->text('disc3')->nullable()->default(null);
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
        Schema::dropIfExists('projects');
    }
};
