<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        // return "API data";
        // $response = Http::get("https://api.rentsmallsmall.com/api/tenant-api");
        // $response->body();
        // $tenants = $response->json();

        // $tenants = $response->json(['user_type'=>'tenant']);

        $usersCount = '';


        if($role == '100'){
            return view('admin');
        }else if($role == '1'){
            return redirect('home');

        }else if($role == '2'){
            return redirect('/admin/home');

        }
    }

}
