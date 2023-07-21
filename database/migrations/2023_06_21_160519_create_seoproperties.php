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
        Schema::create('seoproperties', function (Blueprint $table) {
            $table->id();
            $table->string(column:'pageName', length:100);
            $table->string(column:'title', length:300);
            $table->string(column:'keywords', length:500);
            $table->string(column:'description', length:500);
            $table->string(column:'ogSiteName', length:100);
            $table->string(column:'ogUrl', length:100);
            $table->string(column:'ogTitle', length:100);
            $table->string(column:'ogDescription', length:100);
            $table->string(column:'ogImage', length:100);
            $table->timestamp(column:'created_at')->useCurrent();
            $table->timestamp(column:'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seoproperties');
    }
};
