<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function index(){

        if (Auth::user()->isAdmin() || Auth::user()->isReadingUser()) {
        $owners = Owner::with('cars')->get();
        } else {
            $owners = Owner::with('cars')->where('user_id', Auth::id())->get();
        }

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

        $data['user_id'] = Auth::user()->id;

        $newOwner = Owner::create($data);

        return redirect(route('owners.index'))->with('success', trans('Added'));
    }
    public function edit(Owner $owner){

        $this->authorize('update', $owner);

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

        return redirect(route('owners.index'))->with('success', trans('Updated'));
    }
    public function destroy(Owner $owner){

        $this->authorize('delete', $owner);

        $owner->cars()->delete();

        $owner->delete();

        return redirect(route('owners.index'))->with('success', trans('Deleted'));
    }
}
