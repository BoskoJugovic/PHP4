<?php

namespace App\Http\Controllers;

use App\Models\Projekat;
use App\Http\Controllers\Controller;

use Request;

use Session;

class ProjekatController extends Controller
{
    
    public function index(Request $request){
        if(Request::has('find')){
            $find = Request::get('find');
            $projekti = Projekat::where ( 'naziv', 'LIKE', '%' . $find . '%' )->orWhere ( 'o_projektu', 'LIKE', '%' . $find . '%' )->orWhere ( 'status', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $projekti = Projekat::paginate(5);
        }

        return view('projekat.index', ['projekti' => $projekti]);
    }

    public function details($id){
        
        $projekat = Projekat::find($id);
        
        return view('projekat.details', ['projekat' => $projekat]);
    }

    public function add(){

        return view('projekat.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'naziv'=> 'required',
            'o_projektu'=>'required',
            'status'=>'required'     
        ]);

        $projekat = $request->all();
        
        Projekat::create($projekat);

        Session::flash('success_msg', 'Projekat uspesno dodat');

        return redirect()->route('projekat.index');
    }

    public function edit($id){
        $projekat = Projekat::find($id);

        return view('projekat.edit', ['projekat' => $projekat]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'naziv'=> 'required',
            'o_projektu'=>'required',
            'status'=>'required'   
        ]);

        $projekat = $request->all();

        Projekat::find($id)->update($projekat);

        Session::flash('success_msg', 'projekat uspesno promenjen');

        return redirect()->route('projekat.index');
    }

    public function delete($id){
        Projekat::find($id)->delete();

        Session::flash('success_msg', 'projekat uspesno uklonjen');

        return redirect()->route('projekat.index');
    }
    
}