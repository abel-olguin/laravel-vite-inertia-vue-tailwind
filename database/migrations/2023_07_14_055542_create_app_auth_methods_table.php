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
        Schema::create('app_auth_methods', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\App::class);
            $table->foreignIdFor(\App\Models\AuthMethod::class);
            $table->json('params');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_auth_methods');
    }
};
