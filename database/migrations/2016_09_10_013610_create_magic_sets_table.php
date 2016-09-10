<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magic_sets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code', 16)->unique();
            $table->string('code_magiccards', 16);
            $table->string('release_date', 16);
            $table->boolean('is_promo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magic_sets');
    }
}
