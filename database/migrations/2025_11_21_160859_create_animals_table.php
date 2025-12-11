<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sexe');
            $table->date('birth_date');
            $table->date('arrival_date');
            $table->string('vaccines');
            $table->string('coat');
            $table->string('type');
            $table->string('race');
            $table->string('state');
            $table->string('img_path');
            $table->string('description');
            $table->string('petowner_description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
