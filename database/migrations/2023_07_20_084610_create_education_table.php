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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string("degree_name");
            $table->string("institute_name");
            $table->string("passing_year");
            $table->string("major")->nullable();
            $table->string("minor")->nullable();
            $table->double("cgpa");
            $table->double("cgpa_scale");
            $table->string("institution_url")->nullable();
            $table->string("institution_address")->nullable();
            $table->boolean("status")->default(true);
            $table->timestamps();
            $table->timestamp("deleted_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
