<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
   		 return view('layouts.admin.dashboard');
    }

    public function category(){
   		 return view('layouts.admin.category');
    }

    public function tag(){
   		 return view('layouts.admin.tag');
    }

    public function pertanyaan(){
   		 return view('layouts.admin.pertanyaan');
    }

    public function jawaban(){
   		 return view('layouts.admin.jawaban');
    }
}
