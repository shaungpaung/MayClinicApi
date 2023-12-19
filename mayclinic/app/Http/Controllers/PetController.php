<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Pet;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Form::all();
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Form;
        $data->name = $request->petname;
        $data->status = $request->input('status');
        $data->pawrent = $request->pawrent;
        $data->breed = $request->input('breed');
        $data->gender = $request->gender;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->dob = $request->DOB;
        $data->city = $request->input('city');
        $data->township = $request->input('township');
        $result = $data->save();
        // return response()->json(['data' => $data], 201);
        if($result){
            return ["result"=>"Post Added"];
        } else{
            return ["result"=> "Post not Added"];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pet = Form::find($id);

        if (!$pet) {
            return response()->json(['message' => 'Pet not found'], 404);
        }

        return response()->json(['data' => $pet], 200);
    }

    /**
     * Show the Pet for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pet = Form::find($id);

        if (!$pet) {
            return response()->json(['message' => 'Pet not found'], 404);
        }

        return response()->json(['data' => $pet], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pet = Form::find($id);

        if (!$pet) {
            return response()->json(['message' => 'Pet not found'], 404);
        }

        $data = $request->validate([
            'name' => 'required|string',
            'status' => 'required|string',
            'pawrent' => 'required|string',
            'breed' => 'nullable|string',
            'gender' => 'nullable|string',
            'contact' => 'required|string',
            'address' => 'required|string',
            'dob' => 'required|date',
            'city' => 'nullable|string',
            'township' => 'nullable|string',
        ]);

        $pet->update($data);

        return response()->json(['data' => $pet], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pet = Form::find($id);

        if (!$pet) {
            return response()->json(['message' => 'Pet not found'], 404);
        }

        $pet->delete();

        return response()->json(['message' => 'Pet deleted successfully'], 200);
    }
}