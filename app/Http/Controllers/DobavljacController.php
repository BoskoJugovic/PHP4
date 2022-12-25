<?php

namespace App\Http\Controllers;

use App\Models\Dobavljac;
use App\Http\Controllers\Controller;

use Request;

use Session;

class DobavljacController extends Controller
{
    
    public function index(Request $request){
        if(Request::has('find')){
            $find = Request::get('find');
            $dobavljaci = Dobavljac::where ( 'firma', 'LIKE', '%' . $find . '%' )->orWhere ( 'adresa', 'LIKE', '%' . $find . '%' )->orWhere ( 'telefon', 'LIKE', '%' . $find . '%' )->orWhere ( 'email', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $dobavljaci = Dobavljac::paginate(5);
        }

        return view('dobavljac.index', ['dobavljaci' => $dobavljaci]);
    }

    public function details($id){
        
        $dobavljac = Dobavljac::find($id);
        
        return view('dobavljac.details', ['dobavljac' => $dobavljac]);
    }

    public function add(){

        return view('dobavljac.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'firma'=> 'required',
            'adresa'=>'required',
            'telefon'=>'required',
            'email'=>'required'
        ]);

        $dobavljac = $request->all();
        
        Dobavljac::create($dobavljac);

        Session::flash('success_msg', 'Dobavljac uspesno dodat');

        return redirect()->route('dobavljac.index');
    }

    public function edit($id){
        $dobavljac = Dobavljac::find($id);

        return view('dobavljac.edit', ['dobavljac' => $dobavljac]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'firma'=> 'required',
            'adresa'=>'required',
            'telefon'=>'required',
            'email'=>'required'
        ]);

        $dobavljac = $request->all();

        Dobavljac::find($id)->update($dobavljac);

        Session::flash('success_msg', 'Dobavljac uspesno promenjen');

        return redirect()->route('dobavljac.index');
    }

    public function delete($id){
        Dobavljac::find($id)->delete();

        Session::flash('success_msg', 'Dobavljac uspesno uklonjen');

        return redirect()->route('dobavljac.index');
    }
    
}