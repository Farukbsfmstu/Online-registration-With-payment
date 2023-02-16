<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration_form;

class siteController extends Controller
{
    //
    function registration(){
        return view('Registration');
    }

   public function Controller_registration(Request $request)  {

    // $validataData = $request->validate([
    //     'Student_name' => ['equired','string','max:255'] ,
    //     'Middle_name'  => ['equired','string','max:255'] ,
    //     'Last_name'   => ['equired','string','max:255'] ,
    //     'Father_name' => ['equired','string','max:255'] ,
    //     'Mother_name' => ['equired','string','max:255'] ,
    //     'ID_Number'    => ['equired','string','max:255','unique:users'] ,
    //     'Student_Type'=> ['equired','string','max:255'] ,
    //     'BirthMonth' => ['equired','string','max:255'] ,
    //     'BirthDay'=> ['equired','string','max:255'] ,
    //     'Gender'  => ['equired','string','max:255'] ,
    //     'choose_file'=> ['equired','string','max:255'] ,
    //     'Religion' => ['equired','string','max:255'] ,
    //     'Department'=> ['equired','string','max:255'] ,
    //     'Phone_no' => ['equired','string','max:255','unique:users'] ,
    //     'Present_Address' => ['equired','string','max:255'] ,
    //     'Permanent_Address' => ['equired','string','max:255'] ,


    // ]) ;
// dd($request->all());
$Bangamata=Registration_form::create($request->all());
return view('SSLCommerzService');
   }

}
