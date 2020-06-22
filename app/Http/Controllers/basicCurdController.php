<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class basicCurdController extends Controller
{
    function onSelect(){
        $jsonData = DB::select('select * from student_new');
        $jsonString = json_encode($jsonData);
        $data = json_decode($jsonString);
        return view('select',["studentInfo"=>$data]);
    }


    function onInsert(Request $req){
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::insert('insert into student_new (First_Name, roll,class) values (?, ?,?)', [$name,$roll,$class]);

        if($result===true){
            return "Success";
        }else{
            return "Failed";
        }
    }


    function onDelete(Request $req){

        $id = $req->input('id');

        echo($id);

        $result = DB::delete('DELETE FROM `student_new` WHERE `id`=?', [$id]);
        if($result==true){
            return "Delete Success";
        }else{
            return "Delete Failed";
        }

    }


    function onUpdate(Request $req){
        $id = $req->input('id');
        $name = $req->input('name');
        $roll = $req->input('roll');
        $class = $req->input('class');

        $result = DB::update('UPDATE student_new SET First_Name=?, roll=?, class=? WHERE id=?',[$name,$roll,$class,$id]);

        if($result===true){
            return "Update Success";
        }else{
            return "Update Failed";
        }



    }
}
