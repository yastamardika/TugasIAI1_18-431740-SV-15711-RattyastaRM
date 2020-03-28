<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\User;

class UserController extends Controller
{
    public function index(){
        $result = User::all();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else {
            $data['code']=500;
            $data['result'] = "Error";
        }
        return response()->json($data);
    }

    public function show($id){
        $result = User::where('id',$id)->first();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else {
            $data['code']=500;
            $data['result'] = "Error";
        }
        return response()->json($data);
    }


    public function update(Request $request, $id){
        $result = User::where('id',$id)->first(

        );

        $result->email = $request->email;
        $result->smp = $request->smp;
        $result->fill([
            'password' => Crypt::encrypt($request->password)
        ]);
        $result->save();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else {
            $data['code']=500;
            $data['result'] = "Error";
        }
        return response()->json($data);
    }
}
