<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $users = User::all();
//        dd(User::find(8)->getLoans);
        $loans = Loan::where('id', '>', 0)->with('User')->orderBy('id','desc')->get();

        return view('admin', ['users'=>$users, 'loans'=>$loans]);
    }
}
