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
        Schema::enableForeignKeyConstraints();
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger("cat_id");
            $table->string("owner_name");
            $table->string("email");
            $table->bigInteger("phone");
            $table->string("addr1");
            $table->string("addr2");
            $table->integer("room");
            $table->integer("floor");
            $table->string("age_property");
            $table->string("rent_out");
            $table->integer("price");
            $table->string("about_property");
            $table->unsignedInteger("user_id");
            $table->text("cover");
            $table->integer("status");
            $table->foreign("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->foreign("cat_id")->references("id")->on("categories")->cascadeOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('properties');
    }
};
