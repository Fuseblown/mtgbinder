<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magic_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('multiverse_id')->nullable();
            $table->string('name');
            $table->string('magic_set');
            $table->string('type')->nullable();
            $table->string('rarity')->nullable();
            $table->string('manacost')->nullable();
            $table->string('cmc')->nullable();
            $table->string('power')->nullable();
            $table->string('toughness')->nullable();
            $table->string('loyalty')->nullable();
            $table->text('ability')->nullable();
            $table->text('flavor')->nullable();
            $table->string('variation')->nullable();
            $table->string('artist')->nullable();
            $table->string('set_number')->nullable();
            $table->string('color')->nullable();
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
        Schema::dropIfExists('magic_cards');
    }
}
