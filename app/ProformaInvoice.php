<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProformaInvoice extends Model
{
    protected $fillable = ['exporter_id','pro_invoice_no','pro_invoice_date','exporter_ref','buyer_ref','other_ref','consignee_id','add_consignee','pre_carriage_by','country_of_origin','country_of_final_dest','vessel_no','port_of_discharge','place_of_receipt_pre','port_of_loading','final_dest','delivery_payment','bank_id','currency_code','add_currency'];
}
