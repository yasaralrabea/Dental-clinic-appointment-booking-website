<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apps;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function dates()
    {
        $id = 1;
        $users = Apps::where('id', $id)->select('date', 'time', 'price','id')->get();
        return view('my_appointments', compact('users'));
    }
    public function update_pass()
    {
        return view ('update_pass');

    }

    
public function post_pass(Request $request)
{
    $last_pass = Admin::find(1);

    if ($request->input('current_password')== $last_pass->pass) {

        if ($request->input('new_password') == $request->input('new_password_confirmation')) {

            $last_pass->update([
                'pass' => ($request->input('new_password')), 
            ]);

            return redirect()->back()->with('success', 'تم التحديث بنجاح');
        } else {
            return redirect()->back()->withErrors(['new_password' => 'كلمة المرور الجديدة غير متطابقة']);
        }
    } else {
        return redirect()->back()->withErrors(['current_password' => 'كلمة المرور الحالية غير صحيحة']);
    }
}
}
