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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('technician');
            // $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date')->useCurrent();
            $table->date('deadline')->nullable();
            $table->string('address');
            $table->string('OS_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
