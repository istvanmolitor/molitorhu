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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('role_en')->nullable();
            $table->string('company');
            $table->string('company_en')->nullable();
            $table->unsignedSmallInteger('started_year');
            $table->unsignedSmallInteger('ended_year')->nullable();
            $table->text('description');
            $table->text('description_en')->nullable();
            $table->integer('sort_order')->default(0)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
