<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AddressBookDB;
use DB;
use App\Person;


class indexController extends Controller
{
    //
    function index(){

        $sql= AddressBookDB::all();
        // dd($sql);

        return view('index')->with('sql',$sql);
    }

    function create(Request $request)
    {   
        $sql=AddressBookDB::all()->where('name','=',$request->name);
        if(count($sql)<1){
        $data = new Person;
        $data->name = $request->input('name');
        $data->user_id = $request->input('user_id');
        $data->tel = $request->input('tel');
        $data->birth = $request->input('birth');
        $data->postalCode = $request->input('postalCode');
        $data->address = $request->input('address');
        $data->save();
        };
        return view('index');
    }

    function editor(){
        return view('create');
    }

}
