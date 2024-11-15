<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('nip', 18)->nullable()->change();
        $table->string('nisn', 10)->nullable()->change();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        // Pastikan menyesuaikan dengan definisi awal `nip` dan `nisn`
        $table->string('nip')->change();
        $table->string('nisn')->change();
    });
}

};
