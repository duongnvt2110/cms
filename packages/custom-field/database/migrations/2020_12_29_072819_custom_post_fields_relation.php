<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomPostFieldsRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('item_field', function (Blueprint $table) {
            $table->foreign('group_field_id')->references('id')->on('group_field');
        });
        Schema::table('custom_field', function (Blueprint $table) {
            $table->foreign('item_field_id')->references('id')->on('item_field');
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
