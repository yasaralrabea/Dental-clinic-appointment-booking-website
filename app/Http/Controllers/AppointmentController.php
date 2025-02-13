<?php

namespace App\Http\Controllers;
use App\Models\Apps;  
use App\Models\Avillable;  


use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    
    public function create()
    {
        $all_dates = Avillable::select('date')->distinct()->get();
        
        return view('avillable_oppintments', compact('all_dates'));
    }

    public function searchByNationalId(Request $request)
    {
        $n_id = $request->input('n_id'); 
    
        $appointments = Apps::where('n_id', $n_id)->get(['date', 'time', 'name']);
    
        if ($appointments->isEmpty()) {
            return response()->json(['message' => 'لا توجد مواعيد لهذا الرقم الوطني.'], 404);
        }
    
        return response()->json(['appointments' => $appointments]);
    }
   
    public function avillable_time(Request $request)
    {
        $date=$request->input('date');
        $times=Avillable::where('date', $date)->pluck('time')->toarray();
        return response()->json(['times' => $times]);



    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer|min:1',
            'medical_condition' => 'required|string',
            'appointment_date' => 'required|date', 
            'appointment_time' => 'required|string',   
        ]);
    
        Apps::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'medical_condition' => $request->medical_condition,
            'date' => $request->appointment_date,
            'time' => $request->appointment_time,
            'price' => $request->price,
            'n_id' => $request->n_id,
        ]);
    
        return view('sucss', ['message' => 'تم حجز الموعد بنجاح']);
    }
    
}
