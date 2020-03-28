<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;


class TaskController extends Controller
{
    public function index(){
        $angka = 3;
        for ($i=1; $i < $angka; $i++) {
            $id = $i*$i*$i;
            $result = User::where('id',$id)->get();
            if($result){
                $data['code'] = 200;
                $data['name'] = $result;
            }else {
                $data['code']=500;
                $data['result'] = "Error";
            }
            echo json_encode($data['name']), "<br>";
        }
    }

    public function default($angka){
        // for ($i=0; $i <$angka ; $i++) {
        //     $a = $i*$i*$i;
        //     echo $a," " ;
        // }
        $angka = $angka*$angka*$angka;
        echo $angka;
    }
}
