<?php

namespace App\Http\Controllers;

use App\Models\usluga;
use App\Http\Controllers\Controller;

use Request;

use Session;

class UslugaController extends Controller
{
    
    public function index(Request $request){
        if(Request::has('find')){
            $find = Request::get('find');
            $usluge = Usluga::where ( 'naziv', 'LIKE', '%' . $find . '%' )->orWhere ( 'opis', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $usluge = Usluga::paginate(6);
        }

        return view('usluga.index', ['usluge' => $usluge]);
    }

    public function details($id){
        
        $usluga = Usluga::find($id);
        
        return view('usluga.details', ['usluga' => $usluga]);
    }

    public function add(){

        return view('usluga.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'naziv'=> 'required',
            'opis'=>'required'
                
        ]);

        $usluga = $request->all();
        
        Usluga::create($usluga);

        Session::flash('success_msg', 'usluga uspesno dodata');

        return redirect()->route('usluga.index');
    }

    public function edit($id){
        $usluga = Usluga::find($id);

        return view('usluga.edit', ['usluga' => $usluga]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'naziv'=> 'required',
            'o_projektu'=>'required',
            'status'=>'required'   
        ]);

        $usluga = $request->all();

        Usluga::find($id)->update($usluga);

        Session::flash('success_msg', 'usluga uspesno promenjena');

        return redirect()->route('usluga.index');
    }

    public function delete($id){
        Usluga::find($id)->delete();

        Session::flash('success_msg', 'usluga uspesno uklonjen');

        return redirect()->route('usluga.index');
    }
  
}