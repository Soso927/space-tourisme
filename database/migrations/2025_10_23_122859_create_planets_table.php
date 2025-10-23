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
       Schema::create('planets', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('distance'); // ex: "384,400 km"
        $table->string('travel_time'); // ex: "3 days"
        $table->string('image')->nullable();
        $table->boolean('is_published')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }

    
};
