<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('psus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img')->nullable();
            $table->integer('brand_id');
            $table->integer('price');
            $table->integer('stock');
            $table->softDeletes();
            $table->timestamps();

            //ozelliker
            $table->string('watt')->nullable();
            $table->string('certificate')->nullable();
            $table->boolean('size')->nullable();
            $table->string('socket')->nullable();
            $table->string('chipset')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psus');
    }
};
