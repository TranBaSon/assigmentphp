<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class managerController extends Controller
{
    public function listStudent(){
        $list = student::all();
        return view('admin/tables/studentTable', compact('list'));
    }

    public function addStudent(){
        return view('studentView/add');
    }

    public function addStudent_post(Request $request){
        $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string"    => "Phải nhập vào 1 chuỗi",
            "numeric"   => "Phải nhập vào 1 số",
            "min"   => "Giá trị tối 6 ký tự",
            "max"   => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "name" => "required|string|max:255",
            "age"  => "required|numeric",
            "address" => "required|string|max:200",
            "telephone" => "required|string|max:20",
        ];
        $this->validate($request,$rules,$messages);

        try{
            student::create([
                "name"=> $request->get("name"),
                "age"=> $request->get("age"),
                "address"=> $request->get("address"),
                "telephone"=> $request->get("telephone"),
            ])->save();
        }catch (\Exception $e){
            die($e->getMessage());
        }
        return redirect("/list");

    }
}
