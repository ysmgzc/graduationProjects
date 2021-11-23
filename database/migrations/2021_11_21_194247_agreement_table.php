<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgreementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('content');
            $table->tinyInteger('status')->default(1);
            $table->string('slug');
            $table->string('keywords')->nullable();
            $table->mediumText('description')->nullable();
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
        //
    }
}
