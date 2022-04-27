<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressBookDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_book_db', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_id')->uniqe();
            $table->string('email')->unique();
            $table->date('brith');
            $table->string('tel');
            $table->string('postalCode');
            $table->string('address');
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
        Schema::dropIfExists('address_book_db');
    }
}
