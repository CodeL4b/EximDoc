<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsigneeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consignee_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('consignee_name');
            $table->string('consignee_address');
            $table->string('consignee_country');
            $table->string('consignee_email');
            $table->string('consignee_phone');
            $table->string('consignee_bank');
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
        Schema::dropIfExists('consignee_details');
    }
}
