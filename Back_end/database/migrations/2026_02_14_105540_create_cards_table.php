<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->text('description');
            $table->string('image', 255)->nullable();
            $table->tinyInteger('level')->unsigned()->nullable();
            $table->smallInteger('attack')->unsigned()->nullable();
            $table->smallInteger('defense')->unsigned()->nullable();
            $table->foreignId('type_id')->constrained('types')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
