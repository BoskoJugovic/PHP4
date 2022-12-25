<?php

namespace App\Http\Controllers;

use App\Models\Narucilac;
use App\Http\Controllers\Controller;

use Request;

use Session;

class NarucilacController extends Controller
{
    
    public function index(Request $request){
        // $narucioci = Narucilac::paginate(5);

        if(Request::has('find')){
            $find = Request::get('find');
            $narucioci = Narucilac::where ( 'organizaciona_celina', 'LIKE', '%' . $find . '%' )->paginate (2)->setPath ( '' );
        } else {
            $narucioci = Narucilac::paginate(5);
        }


        return view('narucilac.index', ['narucioci' => $narucioci]);
    }

    public function details($id){
        
        $narucilac = Narucilac::find($id);
        
        return view('narucilac.details', ['narucilac' => $narucilac]);
    }

    public function add(){

        return view('narucilac.add');
    }

    public function insert(Request $request){
        $this->validate($request, [
            'organizaciona_celina'=> 'required'            
        ]);

        $narucilac = $request->all();
        
        Narucilac::create($narucilac);

        Session::flash('success_msg', 'narucilac uspesno dodat');

        return redirect()->route('narucilac.index');
    }

    public function edit($id){
        $narucilac = Narucilac::find($id);

        return view('narucilac.edit', ['narucilac' => $narucilac]);
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'organizaciona_celina'=> 'required'
        ]);

        $narucilac = $request->all();

        Narucilac::find($id)->update($narucilac);

        Session::flash('success_msg', 'narucilac uspesno promenjen');

        return redirect()->route('narucilac.index');
    }

    public function delete($id){
        Narucilac::find($id)->delete();

        Session::flash('success_msg', 'narucilac uspesno uklonjen');

        return redirect()->route('narucilac.index');
    }
}