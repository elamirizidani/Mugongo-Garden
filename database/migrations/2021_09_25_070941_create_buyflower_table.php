<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyflowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyflowers', function (Blueprint $table) {
            $table->id();
            $table->string('names');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('quantity');
            $table->string('price');
            $table->unsignedBigInteger('flower_id');
            $table->foreign('flower_id')->references('id')->on('flowers');
            $table->date('delivery_date');
            $table->date('status')->nullable();
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
        Schema::dropIfExists('buyflowers');
    }
}
