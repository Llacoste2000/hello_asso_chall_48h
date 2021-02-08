<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments_etablissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_comment');
            $table->unsignedBigInteger('id_etablissement');
            $table->foreign('id_comment')->references('id')->on('comments');
            $table->foreign('id_etablissement')->references('id')->on('etablissements');

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
        Schema::dropIfExists('comments_etablissements');
    }
}
