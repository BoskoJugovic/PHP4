<?php

namespace App\Http\Controllers;

use App\Models\SektorOdrzavanja;
use App\Http\Controllers\Controller;

use Request;

use Session;

class SektorOdrzavanjaController extends Controller
{
    
    public function index(Request $request){
        if(Request::has('find')){
            $find = Request::get('find');
            $sektori = SektorOdrzavanja::where ( 'objekat_sektora_odrzavanja', 'LIKE', '%' . $find . '%' )->orWhere ( 'sluzba', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $sektori = SektorOdrzavanja::paginate(5);
        }

        return view('sektorOdrzavanja.index', ['sektori' => $sektori]);
    }

    public function details($id){
        
        $sektor = SektorOdrzavanja::find($id);
        
        return view('sektor.details', ['sektor' => $sektor]);
    }

    public function add(){

        return view('sektorOdrzavanja.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'objekat_sektora_odrzavanja'=> 'required',
            'sluzba'=>'required'
        ]);

        $sektor = $request->all();
        
        SektorOdrzavanja::create($sektor);

        Session::flash('success_msg', 'sektor uspesno dodat');

        return redirect()->route('sektorOdrzavanja.index');
    }

    public function edit($id){
        $sektor = SektorOdrzavanja::find($id);

        return view('sektorOdrzavanja.edit', ['sektor' => $sektor]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'objekat_sektora_odrzavanja'=> 'required',
            'sluzba'=>'required'
        ]);

        $sektor = $request->all();

        SektorOdrzavanja::find($id)->update($sektor);

        Session::flash('success_msg', 'sektor uspesno promenjen');

        return redirect()->route('sektorOdrzavanja.index');
    }

    public function delete($id){
        SektorOdrzavanja::find($id)->delete();

        Session::flash('success_msg', 'sektor uspesno uklonjen');

        return redirect()->route('sektorOdrzavanja.index');
    }
}