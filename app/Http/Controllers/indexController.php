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
        return view('index')->with('sql',$sql);
    }

    function create_data(Request $request)
    {   
        $sql=AddressBookDB::all()->where('user_id','=',$request->user_id);
        if(count($sql)<1){
            $data = new Person;
            $data->name = $request->input('name');
            $data->user_id = $request->input('user_id');
            $data->tel = $request->input('tel');
            $data->birth = $request->input('birth');
            $data->postalCode = $request->input('postalCode');
            $data->address = $request->input('address');
            $data->save();
            return redirect()->route('index');
        }else{
            return redirect()->route('create')->with('error','資料錯誤');
        };    
    }

    function create_page(){
        return view('create');
    }

    function editor(){
        return view('edit');
    }
    function destory($user_id){
        $target= AddressBookDB ::all()-> where('user_id','=',$user_id);
        if(count($target)>0){
            $target->each->delete();
            return redirect()->route('index');
        }
    }
    function update($user_id){
        $sql=AddressBookDB::all()->where('user_id','=',$user_id);
        $person = new Person;
        // var_dump($sql);
        // echo $sql[0]['name'];
        foreach($sql as $data);
        $person->name =$data["name"];
        $person->user_id = $data["user_id"];
        $person->tel = $data["tel"];
        $person->birth = $data["birth"];
        $person->postalCode = $data["postalCode"];
        $person->address = $data["address"];
        // return view('editor')->with('date',$data);
        return view('edit')->with('person',$person);
    }
    function edit_page(){
        return view('edit');
    }
}
