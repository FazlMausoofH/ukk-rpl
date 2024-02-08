<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function verif(Request $cek){
        // dd($cek);
        $cek = DB::table('users')
            ->where('username', '=', $cek->input('US'))
            ->where('password', '=', $cek->input('PS'))
            ->first();
    
        if($cek){
            if($cek->role=='admin'){
                return redirect('/menu');
            }
            if($cek->role=='owner'){
                return redirect('/laporan');
            }
            if($cek->role=='kasir'){
                return redirect('/pembayaran');
            }
            if($cek->role=='pelangan'){
                return redirect('/pemesanan');
            }
        } else {
            echo "error";
        }
    }
    
}
