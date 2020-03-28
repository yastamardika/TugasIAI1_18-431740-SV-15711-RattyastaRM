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
}
