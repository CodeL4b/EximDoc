<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformaInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proforma_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exporter_id');
            $table->string('exporter_detail');
            $table->string('pro_invoice_no');
            $table->string('pro_invoice_date');
            $table->string('exporter_ref');
            $table->string('buyer_ref');
            $table->string('other_ref');
            $table->string('consignee_id');
            $table->string('add_consignee');
            $table->string('pre_carriage_by');
            $table->string('country_of_origin');
            $table->string('country_of_final_dest');
            $table->string('vessel_no');
            $table->string('port_of_discharge');
            $table->string('place_of_receipt_pre');
            $table->string('port_of_loading');
            $table->string('final_dest');
            $table->string('delivery_payment');
            $table->string('bank_id');
            $table->string('currency_code');
            $table->string('add_currency');
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
        Schema::dropIfExists('proforma_invoices');
    }
}
