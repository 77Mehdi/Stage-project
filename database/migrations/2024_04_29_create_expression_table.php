<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpressionTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('expression_des_besoins', function (Blueprint $table) {
            $table->id();
            $table->integer('Mle');
            $table->string('nome');
            $table->string('prenom');
            $table->string('sirves');
            $table->string('email');
            $table->string('theme');
            $table->integer('days');
            $table->string('domaine');
            $table->string('catalogue');
            $table->string('specifique');
            $table->date('creation_date')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
      */
    public function down(): void
    {
        Schema::dropIfExists('expression_des_besoins');
    }
} 
