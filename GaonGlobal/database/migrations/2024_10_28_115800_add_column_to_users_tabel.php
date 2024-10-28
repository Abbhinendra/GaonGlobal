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
        Schema::table('users', function (Blueprint $table) {
             $table->string('type');
             $table->string('role')->default('user');
             $table->integer('rating')->nullable();
             $table->bigInteger('seller_amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('type');
        $table->dropColumn('role');
        $table->dropColumn('rating');
        $table->dropColumn('seller_amount');
        });
    }
};
