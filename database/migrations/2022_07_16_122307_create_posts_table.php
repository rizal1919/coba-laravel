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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            // untuk menyimpan sebagian kecil tulisan
            // pake text karna ukurannya pasti besar > 255 character

            $table->string('slug')->unique;

            $table->text('body');
            $table->timestamp('published_at')->nullable;
            // nullable berarti boleh kosong

            $table->timestamps();
            // kapan postingannya dibuat
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
