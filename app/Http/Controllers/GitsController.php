<?php

namespace App\Http\Controllers;

use App\Gits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class GitsController extends Controller
{
    public function index(){
        $result = Gits::all();

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else {
            $data['code']=500;
            $data['result'] = "Error";
        }
        return response()->json($data);
    }

    public function store(Request $request){
        $result = Gits::create([
            'user_id' => $request->user_id,
            'git'=> $request->git
            ]
        );

        if($result){
            $data['code'] = 200;
            $data['result'] = $result;
        }else {
            $data['code']=500;
            $data['result'] = "Error";
        }
        return response()->json($data);
    }

    public function destroy($id){
        $result = Gits::where('id',$id)->first();

        $result->delete();

        return redirect('/submission');
    }

}
