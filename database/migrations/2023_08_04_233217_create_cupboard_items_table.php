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
        Schema::create('cupboard_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cupboard_id')->constrained();
            $table->foreignId('cupboard_item_type_id')->constrained();
            $table->foreignId('quantity_type_id')->constrained();
            $table->string('name');
            $table->string('quantity');
            $table->string('volume');
            $table->date('expires_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupboard_items');
    }
};
