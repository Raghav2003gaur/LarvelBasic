<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Network;
use App\Models\Dojo;

class NetworkController extends Controller
{
    public function index(){
        $networks=Network::with('dojo')->orderBy('created_at','desc')->paginate(10) ;

        return view('networks.index',["networks"=>$networks]); 
    }


    public function show($id){

        $network=Network::with('dojo')->findOrFail($id);
     return view('networks.show',["network"=>$network]);
    }
    public function create(){
        
        $dojos=Dojo::all(); 
         return view('networks.create',["dojos"=>$dojos]); 
    }
      public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'skill' => 'required|integer|min:0|max:100',
        'bio' => 'required|string|min:20|max:1000',
        'dojo_id' => 'required|exists:dojos,id',
    ]);

    Network::create($validated);

    return redirect()->route('networks.index')->with('success', 'Network created successfully.');
}

}