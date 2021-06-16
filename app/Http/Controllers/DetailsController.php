<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailsController extends Controller
{
    //
    public function adddata(Request $req){
        $data = new Detail;
        $data->name = $req->name;
        $data->uname = $req->uname;
        $data->dob = $req->dob;
        $data->email = $req->email;
        $data->telno = $req->telno;
        $data->nicno = $req->nicno;
        $data->gender = $req->gender;
        $data->password = $req->password ;
        $data->repassword = $req->repassword;
        $data->save();
        return redirect('index');


    }
    public function getdata(){
        $data = Detail::all();
        return view('fetch',['data' => $data]);
    }
}
