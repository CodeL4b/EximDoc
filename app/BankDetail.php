<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $fillable = ['bank_name','bank_branch_add','bank_swift_code','bank_acc_no','bank_acc_name'];
}
