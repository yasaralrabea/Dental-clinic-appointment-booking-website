<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Send; 

class SendController extends Controller
{
    public function send()
    {
        return view('send');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',   
            'subject' => 'required|string|max:255', 
            'message' => 'required|string',       
        ]);
    
        Send::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
    
        return redirect()->back()->with('success', 'تم إرسال الجواب بنجاح');
    }
    

    public function show()
    {
        $quistions=Send::all();
        return view('show_Q', compact('quistions'));

    }

    public function store_A(Request $request)
    {
    
        Send::create([
            'name' => $request->name,
            'message' => $request->message,
        ]);

        // إعادة توجيه أو عرض رسالة تأكيد
        return view('sucss_Q', ['message' => 'تم حجز الموعد بنجاح']);
    }
}


