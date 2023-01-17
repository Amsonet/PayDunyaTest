<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CustomerAccount;
use App\Models\Transaction;


class Currency extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function customeraccounts(){
        return $this->hasMany(CustomerAccount::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

}
