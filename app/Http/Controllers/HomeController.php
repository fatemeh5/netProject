<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Doc;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $re = Resume::all();
        $doc = Doc::first();
        return view('home',compact('re','doc'));
    }
    public function edit($id)
    {
        $r = Resume::find($id);
        return view('editresume',compact('r'));
    }
    public function update(Request $re)
    {
        
        $r = Resume::find($re->all()["id"]);
        $r->delete();
        $r = new Resume();
        $r->name = $re->all()["name"];
        $r->description = $re->all()["editor1"];
        $r->save();
        return redirect(route('home'));
    }
    public function editdoc()
    {
        $r = Doc::first();
        return view('editdoc',compact('r'));
    }
    
    public function docupdate(Request $re)
    {
        $r = Doc::first();
        $r->delete();
        $r = new Doc();
        $r->description = $re->all()["editor1"];
        $r->save();
        return redirect(route('home'));
    }
}
