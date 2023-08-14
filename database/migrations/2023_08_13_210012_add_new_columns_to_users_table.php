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
            $table->string("surname")->after("name");
            $table->string("phone")->default("0")->after("surname");
            $table->string("github")->after("remember_token")->nullable();
            $table->string("linkedin")->after("github")->nullable();
            $table->string("facebook")->after("linkedin")->nullable();
            $table->string("twitter")->after("facebook")->nullable();
            $table->string("instagram")->after("twitter")->nullable();
            $table->string("image")->after("instagram")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
