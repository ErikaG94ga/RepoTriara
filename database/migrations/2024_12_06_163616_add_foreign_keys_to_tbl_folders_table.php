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
        Schema::table('tbl_folders', function (Blueprint $table) {
            $table->foreign(['parent'], 'tbl_folders_ibfk_1')->references(['id'])->on('tbl_folders')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['client_id'], 'tbl_folders_ibfk_2')->references(['id'])->on('tbl_users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign(['group_id'], 'tbl_folders_ibfk_3')->references(['id'])->on('tbl_groups')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_folders', function (Blueprint $table) {
            $table->dropForeign('tbl_folders_ibfk_1');
            $table->dropForeign('tbl_folders_ibfk_2');
            $table->dropForeign('tbl_folders_ibfk_3');
        });
    }
};
