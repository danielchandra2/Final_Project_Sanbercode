<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel {

    public static function get_all(){
        $pertanyaan = DB::table("pertanyaan")->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_pertanyaan = DB::table("pertanyaan")->insert($data);
        return $new_pertanyaan;
    }
    
    public static function find_by_id($id){
        $pertanyaan = DB::table("pertanyaan")->where("id", $id)->first();
        return $pertanyaan;
    }

    public static function update($id, $request){
        $pertanyaan = DB::table("pertanyaan")
                        ->where("id", $id)
                        ->update([
                                    "judul" => $request["judul"],
                                    "isi" => $request["isi"],
                                    "tag" => $request["tag"],
                                ]);
        return $pertanyaan;
    }

    public static function destroy($id){
        $deleted = DB::table("pertanyaan")
                        ->where("id", $id)
                        ->delete();
        return $deleted;
    }

}