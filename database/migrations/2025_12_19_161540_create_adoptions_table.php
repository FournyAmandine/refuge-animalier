<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->string('civil_state');
            $table->string('street');
            $table->integer('number');
            $table->string('postal_code');
            $table->foreignId('animal_id')->constrained()->cascadeOnDelete();
            $table->string('locality');
            $table->text('description_place');
            $table->boolean('validate')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
