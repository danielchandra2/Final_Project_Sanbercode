<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;
use App\Pertanyaan;
use App\Jawaban;
use Illuminate\Support\Str;

class PertanyaanController extends Controller
{
    //
    // buat autentikasi dulu
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        $compact = compact("pertanyaan");
        return view("pertanyaan.index", $compact);
    }

    public function create(){
        return view("pertanyaan.form");
    }

    public function store(Request $request){
        $new_pertanyaan = new Pertanyaan;

        $new_pertanyaan->judul = $request["judul"];
        $new_pertanyaan->isi = $request["isi"];
        $new_pertanyaan->user_id = $request["user_id"];
        $new_pertanyaan->tag_id = $request["tag_id"];
        $new_pertanyaan->category_id = $request["category_id"];

        $new_pertanyaan->save();

        return redirect("/pertanyaan");
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = JawabanModel::get_all();
        $compact = compact("pertanyaan", "jawaban");
        return view("pertanyaan.show", $compact);
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $compact = compact("pertanyaan");
        return view("pertanyaan.edit", $compact);
    }

    public function update($id, Request $request){
        $pertanyaan = Pertanyaan::find($id);

        $pertanyaan->judul = $request["judul"];
        $pertanyaan->isi = $request["isi"];
        $pertanyaan->user_id = $request["user_id"];
        $pertanyaan->tag_id = $request["tag_id"];
        $pertanyaan->category_id = $request["category_id"];

        $pertanyaan->save();

        return redirect("/pertanyaan");
    }

    public function destroy($id){
        $deletedpertanyaan = PertanyaanModel::destroy($id);
        return redirect("/pertanyaan");
    }
}
