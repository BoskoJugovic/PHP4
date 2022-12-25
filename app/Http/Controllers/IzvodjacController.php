<?php

namespace App\Http\Controllers;

use App\Models\Izvodjac;
use App\Http\Controllers\Controller;

use Request;

use Session;

class IzvodjacController extends Controller
{
    
    public function index(Request $request){
        if(Request::has('find')){
            $find = Request::get('find');
            $izvodjaci = Izvodjac::where ( 'ime', 'LIKE', '%' . $find . '%' )->orWhere ( 'prezime', 'LIKE', '%' . $find . '%' )->orWhere ( 'email', 'LIKE', '%' . $find . '%' )->orWhere ( 'radno_mesto', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $izvodjaci = Izvodjac::paginate(5);
        }

        return view('izvodjac.index', ['izvodjaci' => $izvodjaci]);
    }

    public function details($id){
        
        $izvodjac = Izvodjac::find($id);
        
        return view('izvodjac.details', ['izvodjac' => $izvodjac]);
    }

    public function add(){

        return view('izvodjac.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'ime'=> 'required',
            'prezime'=>'required',
            'datum_rodjenja'=>'required',
            'email'=>'required',
            'radno_mesto'=>'required'
        ]);

        $izvodjac = $request->all();
        
        Izvodjac::create($izvodjac);

        Session::flash('success_msg', 'Izvodjac uspesno dodat');

        return redirect()->route('izvodjac.index');
    }

    public function edit($id){
        $izvodjac = Izvodjac::find($id);

        return view('izvodjac.edit', ['izvodjac' => $izvodjac]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'ime'=> 'required',
            'prezime'=>'required',
            'datum_rodjenja'=>'required',
            'email'=>'required',
            'radno_mesto'=>'required'
        ]);

        $izvodjac = $request->all();

        Izvodjac::find($id)->update($izvodjac);

        Session::flash('success_msg', 'Izvodjac uspesno promenjen');

        return redirect()->route('izvodjac.index');
    }

    public function delete($id){
        Izvodjac::find($id)->delete();

        Session::flash('success_msg', 'Izvodjac uspesno uklonjen');

        return redirect()->route('izvodjac.index');
    }
}