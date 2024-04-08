<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::with('cars')->get();
        return view('owners.index', ['owners' => $owners]);
    }
    public function create(){

        return view('owners.create');
    }
    public function store(Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|regex:/^[0-9()+.\- ()]{9,18}$/',
            'email' => [
                'required',
                'email',
                Rule::unique('owners'),
            ],
            'address' => 'required'
        ]);

        $newOwner = Owner::create($data);

        return redirect(route('owners.index'))->with('success', 'Pridėta');
    }
    public function edit(Owner $owner){

        return view('owners.edit', ['owner' => $owner]);
    }
    public function update(Owner $owner, Request $request){

        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required|regex:/^[0-9()+.\- ()]{9,18}$/',
            'email' => [
                'required',
                'email',
                Rule::unique('owners')->ignore($owner->id),
            ],
            'address' => 'required'
        ]); 

        $owner->update($data);

        return redirect(route('owners.index'))->with('success', 'Atnaujinta');
    }
    public function destroy(Owner $owner){

        $owner->cars()->delete();

        $owner->delete();

        return redirect(route('owners.index'))->with('success', 'Ištrinta');
    }
}
