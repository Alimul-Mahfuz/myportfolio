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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string("publication_title");
            $table->string("type");
            $table->string("publisher_name");
            $table->string("city");
            $table->string("country");
            $table->string("publication_date");
            $table->string("abastract")->nullable();
            $table->string("doi")->nullable();
            $table->string("url")->nullable();
            $table->string("tags")->nullable();
            $table->timestamps();
            $table->timestamp("deleted_at")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
