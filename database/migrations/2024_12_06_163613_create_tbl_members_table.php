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
        Schema::create('tbl_members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->timestamp('timestamp')->useCurrent();
            $table->string('added_by', 32);
            $table->integer('client_id')->index('client_id');
            $table->integer('group_id')->index('group_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_members');
    }
};