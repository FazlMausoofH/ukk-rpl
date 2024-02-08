<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function verif(Request $req){
        $cek=DB::table('users')
        ->where('username','=',$req->input('us'))
        ->where('password','=',$req->input('ps'))
        ->first();

        if($cek){
            if($cek->role=='admin'){
                return redirect('/admin');    
            }
            if($cek->role=='pelanggan'){
                return redirect('/pelanggan');    
            }
            if($cek->role=='onwer'){
                return redirect('/onwer');    
            }
            if($cek->role=='kasir'){
                return redirect('/kasir');    
            }
        } else {
            echo "error";
        }
    }
}
