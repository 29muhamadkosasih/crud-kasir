<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Login;
use App\Models\Kasir;
use App\Models\Admin;
use App\Models\Manajer;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login(Request $request) {
        $username = $request->username;
        $password = $request->password;
        $data= Login::where('username', $username)->first();
        if ($data) {
            Session::put('role', $data->role);
            Session::put('login', TRUE);

            if ($data->password==$password) {
                if ($data->role=="kasir") {
                    $transaksi = Kasir::all();
                    // dd($transaksi);
                    return view('kasir.index',compact('transaksi'));
                }elseif ($data->role=="admin") {
                    Session::put('admin',$data->role);
                    $user = Admin::all();
                    return view('admin.index',compact('user'));
                }else{
                    Session::put('manajer',$data->role);
                    $menu = Manajer::all();
                    return view('manajer.index',compact('menu'));
                }

            }
            else {
                return redirect()->back()->with('danger','Password Salah');
            }
        }else{
            return redirect()->back()->with('danger','Username Tidak Ditemukan');
        }
    }
    public function logout(){
        Session::put('login',FALSE);
        return redirect('/');
    }
}
