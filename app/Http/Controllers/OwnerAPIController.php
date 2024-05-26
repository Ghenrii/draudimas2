<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerAPIController extends Controller
{
    public function index()
    {
        return Owner::all();
    }

    public function show($id)
    {
        return Owner::find($id);  
    }

    public function store(Request $request)
    {
        $owner = new Owner;
        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        $owner->address = $request->address;
        $owner->user_id = $request->user_id;

        $owner->save();

        return $owner;
    }

    public function update(Request $request, $id)
    {
        $owner = Owner::find($id);

        $owner->name = $request->name;
        $owner->surname = $request->surname;
        $owner->phone = $request->phone;
        $owner->email = $request->email;
        $owner->address = $request->address;
        $owner->user_id = $request->user_id;

        $owner->save();

        return $owner;
    }

    public function destroy(Owner $owner)
    {
        $owner->delete();
        return true;
    }
}
