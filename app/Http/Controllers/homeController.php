<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function store(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "course"=>"required|integer"
        ]);
        Client::create([
            "name" => $request->name,
            "email"=>$request->email,
            "country"=>$request->country,
            "phone"=>$request->phone,
            "occupation" => $request->occupation,
            "university_level"=>$request->uni,
            "course"=>$request->course,
            "is_admin"=>'0'
        ]);

        $courseCounts = Client::select('course', DB::raw('count(*) as count'))->groupBy('course')->get();

        foreach ($courseCounts as $courseCount) {
            Lesson::where('id', $courseCount->course)
                ->update(['numberOfClients' => $courseCount->count]);
        }
        return redirect()->back()->with("success", "You are registered successfully. Our team will contact you as soon as possible !");
    }
}
