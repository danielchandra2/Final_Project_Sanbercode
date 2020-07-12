<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
{
    public function store(Request $request){
        $new_jawaban = new Jawaban;

        $new_jawaban->jawaban = $request["jawaban"];
        $new_jawaban->pertanyaan_id = $request["pertanyaan_id"];

        $new_jawaban->save();

        return redirect("/pertanyaan");
    }
}
