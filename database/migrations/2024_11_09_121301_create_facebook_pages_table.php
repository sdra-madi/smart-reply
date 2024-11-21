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
        Schema::create('facebook_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facebook_account_id');
            $table->foreign('facebook_account_id')->references('id')->on('facebook_accounts')->onDelete('cascade');
            $table->string('page_name');
            $table->string('page_id');
            $table->string('page_access_token');
            $table->string('page_email')->nullable();
            $table->string('page_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facebook_pages');
    }
};
