<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

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
        $data = $request->all();
        unset($data["_token"]); //array asosiatif key _token biar ga ikut
        $pertanyaansave = PertanyaanModel::save($data);
        if($pertanyaansave){
            return redirect("/pertanyaan");
        }
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $compact = compact("pertanyaan");
        return view("pertanyaan.show", $compact);
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $compact = compact("pertanyaan");
        return view("pertanyaan.edit", $compact);
    }

    public function update($id, Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::update($id, $data);
        return redirect("/pertanyaan");
    }

    public function destroy($id){
        $deletedpertanyaan = PertanyaanModel::destroy($id);
        return redirect("/pertanyaan");
    }
}
