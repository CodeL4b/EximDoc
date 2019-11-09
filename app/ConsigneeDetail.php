<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsigneeDetail extends Model
{
    protected $fillable = ['consignee_name','consignee_address','consignee_country','consignee_email','consignee_phone','consignee_bank'];
}
