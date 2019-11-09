<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentReceiptEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_receipt_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('proforma_invoice_id');
            $table->string('consignee_id');
            $table->string('customer_payment');
            $table->string('payment_receive');
            $table->string('bank_referance');
            $table->string('date');
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
        Schema::dropIfExists('payment_receipt_entries');
    }
}
