<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('front_contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('app_title');
            $table->text('app_desc');
            $table->string('app_image');
            $table->string('app_button');
            $table->string('app_button_url');
            $table->string('service1_icon');
            $table->string('service1_title');
            $table->text('service1_desc');
            $table->string('service2_icon');
            $table->string('service2_title');
            $table->text('service2_desc');
            $table->string('service3_icon');
            $table->string('service3_title');
            $table->text('service3_desc');
            $table->string('service4_icon');
            $table->string('service4_title');
            $table->text('service4_desc');
            $table->string('bills_text');
            $table->string('bills_image');
            $table->string('tariffs_text');
            $table->string('tariffs_image');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_contents');
    }
}
