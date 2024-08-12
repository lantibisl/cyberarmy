<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('nilai');
            $table->timestamps();
        });

        DB::table('kelas')->insert([
            [
                'nama' => '3A',
                'nilai' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => '3B',
                'nilai' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => '3C',
                'nilai' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
