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
        Schema::create('menus', function (Blueprint $table) {
            $table->uuid('id');

            $table->string('nama_menu', 100);
            $table->string('icon', 100);
            $table->string('route', 100);
            $table->string('header_id', 100)->nullable();
            $table->string('parent_id', 100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
