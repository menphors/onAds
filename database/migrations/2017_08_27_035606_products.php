<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('pro_id');
                $table->string('pro_name');
                $table->string('alias')->nullable();
                $table->string('description')->nullable();
                $table->string('pro_price')->nullable();
                $table->string('pro_disc')->nullable();
                $table->string('avatar')->nullable();
                $table->string('flag_del');
                $table->integer('created_by')->unsigned();
                $table->timestamps();
                $table->softDeletes();
            });
        }
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
