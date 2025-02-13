<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
                $table->id();
                $table->string('judul');
                $table->enum('tipe',['experience','education']);
        $table->date('tgl_mulai');
        $table->date('tgl_akhir')->nullable();
        $table->string('info1');
        $table->string('info2')->default(''); // Set default value
        $table->string('info3')->default(''); // Set default value
        $table->text('isi')->nullable()->change();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat');
    }
};
