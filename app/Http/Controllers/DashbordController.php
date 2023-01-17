<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Currency;
use App\Models\CustomerAccount;
use App\Models\Transaction;

class DashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {   

        $Transactions=Transaction::where('customer_account_id',auth()->user()->customeraccount->id)->orderBy('created_at', 'desc')->get();
        $nbreTransactions=Transaction::where('customer_account_id',auth()->user()->customeraccount->id)->count();        

        $receipt = Transaction::where('customer_account_id',auth()->user()->customeraccount->id)
                                ->Where('type','Credit')->get();
                                $nbreReceipt = $receipt->count();

        $sending = Transaction::where('customer_account_id',auth()->user()->customeraccount->id)
                                ->Where('type','Debit')->get();
                                $nbresending = $sending->count();



     $all_amount = Transaction::Where('customer_account_id',auth()->user()->customeraccount->id)
    ->selectRaw("SUM(amount) as total_amount")
    ->groupBy('type')
    ->get();

                        
        return view('dashbord-paydunya', [
            'Transactions'=>$Transactions,
            'nbreTransactions'=>$nbreTransactions,
            'receipt'=>$receipt, 
            'nbreReceipt'=>$nbreReceipt,
            'nbresending'=>$nbresending,
            'sending'=>$sending
        ]);

    }

}
