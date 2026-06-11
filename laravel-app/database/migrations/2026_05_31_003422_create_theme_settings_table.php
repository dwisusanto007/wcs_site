<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('group', 50); // 'global' or section name like 'hero', 'tabs', 'footer'
            $table->string('key', 100);
            $table->string('value', 50)->default('#000000');
            $table->string('label', 255)->nullable();
            $table->timestamps();

            $table->unique(['group', 'key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('theme_settings');
    }
};
