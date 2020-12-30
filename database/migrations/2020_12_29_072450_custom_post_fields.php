<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomPostFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('group_field', function (Blueprint $table) {
            $table->id();
            $table->string('group_title');
            $table->string('group_rules');
            $table->timestamps();
        });

        Schema::create('item_field', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('field_label');
            $table->string('field_name');
            $table->string('field_rules');
            $table->string('field_type');
            $table->bigInteger('group_field_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('custom_field', function (Blueprint $table) {
            $table->id();
            $table->string('use_for');
            $table->bigInteger('user_for_id')->unsigned();
            $table->bigInteger('item_field_id')->unsigned();
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
