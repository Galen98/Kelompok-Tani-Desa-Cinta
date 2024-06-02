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
        Schema::create('lahan', function (Blueprint $table) {
            $table->id();
            $table->string('namalahan');
            $table->string('alamat_lahan');
            $table->decimal('luas_lahan');
            $table->integer('users_id');
            $table->decimal('latitude',9,7);
            $table->decimal('longitude',10,7);
            $table->decimal('latitude_2',9,7);
            $table->decimal('longitude_2',10,7);
            $table->decimal('latitude_3',9,7);
            $table->decimal('longitude_3',10,7);
            $table->decimal('latitude_4',9,7);
            $table->decimal('longitude_4',10,7);
            $table->boolean('status');
            $table->timestamps('pekerjaan_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lahan');
    }
};
