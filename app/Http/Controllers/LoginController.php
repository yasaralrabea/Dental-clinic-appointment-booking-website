<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; 

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }
    
    public function check_password (Request $request)
    {
        $get_pass = Admin::where('id', 1)->pluck('pass')->first();
        
        if ($request->input('password') == $get_pass)
            {
                session(['admin_logged_in' => true]); 
                return redirect('/admin'); 
            }
            else
            {
                return redirect()->back()->with('eror', 'كلمة المرور غير صحيحة !  ');
            }


    }

    public function logout(Request $request)
    {
        session()->forget('admin_logged_in'); // حذف الجلسة
        return redirect('/login');
    }
}
