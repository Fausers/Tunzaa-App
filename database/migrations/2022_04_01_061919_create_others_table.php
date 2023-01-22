<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOthersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('others', function (Blueprint $table) {
            $table->id();
            $table->string('head_1');
            $table->string('head_2');
            $table->string('head_3');
            $table->string('head_4');
            $table->string('head_5');
            $table->string('contact_head');
            $table->longText('contact_text');
            $table->string('phone');
            $table->string('address');
            $table->string('contacts_image');
            $table->string('contacts_name');
            $table->string('contacts_mail');
            $table->string('contacts_phone');
            $table->string('contacts_message');
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
        Schema::dropIfExists('others');
    }
}
