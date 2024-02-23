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
        Schema::create('alumini_members', function (Blueprint $table) {
            $table->id();

            $table->string('sc_num');
            $table->string('email');
            $table->string('name');
            $table->integer('m_code');
            $table->integer('mobile');
            $table->string('degree_type');
            $table->string('degree');
            $table->string('id_num')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('agreement')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('designation')->nullable();
            $table->string('sector')->nullable();
            $table->string('about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumini_members');
    }
};
