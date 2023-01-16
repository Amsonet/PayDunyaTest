<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currency;
use App\Models\CustomerAccount;

class Transaction extends Model
{
    use HasFactory;

    public function customeraccount(){
        return $this->belongsTo(CustomerAccount::class);
    }


    public function currency(){
        return $this->belongsTo(Currency::class);
    }

}
