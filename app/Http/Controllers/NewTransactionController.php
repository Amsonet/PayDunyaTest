<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Currency;
use App\Models\CustomerAccount;
use App\Models\Transaction;


class NewTransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {        

        $code=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);

        $transaction = Transaction::where('transaction_number', '=', $code)->get();
        $transactionCount = $transaction->count();

        if($transactionCount > 0){

            while($transactionCount > 0){

                $code=substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4) .'-' .substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4);

                $transaction = Transaction::where('transaction_number', '=', $code)->get();
                $transactionCount = $transaction->count();

            }

     }

        return view('home-paydunya',['code'=>$code]);

    }


    public function store(Request $request)
    { 

        $msg="";$balance='0';$receipt_details='';

        //$balance=auth()->user()->id;
        $balance=auth()->user()->customeraccount->balance;

        if($balance<$request->amount) {
            $msg="<div class='alert alert-danger'><b>Desole!</b> Vous n'avez pas assez de credit pour effectuer cette operation.</div>";

            return response()->json(array('msg'=> $msg,'success'=> 0), 200);
        }
   
        \App\Models\Transaction::create([
            'transaction_number' => $request->transaction_number,
               
            'reason' =>$request->reason,
            'amount' => $request->amount,
            'type' => 'Debit',
            'receipt_method' => $request->receipt_method,
            'receipt_details' =>$receipt_details, 
            'customer_account_id' => auth()->user()->customeraccount->id,
            'currency_id' =>'1'
           
            ]);  
      
    $msg="<div class='alert alert-success'><b>Done!</b> Votre envoi a ete effectue avec succes.</div>";

      return response()->json(array('msg'=> $msg,'success'=> 1), 200);

    }


}
