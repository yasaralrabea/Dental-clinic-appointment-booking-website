<?php

namespace App\Http\Controllers;
use App\Models\Doctor;   
use App\Models\Apps;  
use App\Models\Avillable;  


use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function show()
    {
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));

    }

    

    public function patient_appointments()
    {
         $appointments = Apps::all();
     
         return view('patient_appointments', compact('appointments'));
    }

public function index()
{
    $request='ahmad';
     $appointments = Avillable::all();
 
     return view('doctor_appointments', compact('appointments'));
}

public function store(Request $request)
{
   /* $request->validate([
        'date' => 'required|date',

    ]);*/
    Avillable::create([
        'date' => $request->appointment_date,
        'time' => $request->appointment_time,

    ]);
    return redirect()->back()->with('success', 'تم إتاحة الموعد بنجاح');


}

public function destroy($id)
    {
        Avillable::find($id)->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');


    }
    
public function destroy_a($id)
{
    Apps::find($id)->delete();
    return redirect()->back()->with('success', 'تم الحذف بنجاح');


}

public function controll()
{
    $doctors=Doctor::all();
    return view('doctor_controll', compact('doctors'));

}




public function store_d(Request $request)
{
    Doctor::create([
        'name' => $request->name,
        'cv' => $request->cv,
        'phone' => $request->phone,


    ]);

    // إعادة توجيه أو عرض رسالة تأكيد
    return redirect()->back()->with('success', 'تم الإضافة بنجاح');
}


public function destroy_d($id)
    {
        Serve::find($id)->delete();
        return redirect()->back()->with('success', 'تم الحذف بنجاح');


    }
}



