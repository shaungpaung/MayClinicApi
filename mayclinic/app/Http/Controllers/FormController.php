<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $datas = Form::all();
        // return view('index', compact('datas'));
        $result = Form::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = new Form;
        $data->name = $request->name;
        $data->status = $request->input('status');
        $data->pawrent = $request->pawrent;
        $data->breed = $request->input('breed');
        $data->gender = $request->gender;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->dob = $request->dob;
        $data->city = $request->input('city');
        $data->township = $request->input('township');
        $result = $data->save();

    if ($result) {
        return ["result" => "Post Added"];
    } else {
    return ["result" => "Post not Added"];
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $form = Form::find($id);
        return $form;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        // $data = Form::find($id);
        // $datas = Form::all();
        // return view('index',compact('data','datas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Form::find($id);

        $data->name = $request->name;
        $data->status = $request->input('status');
        $data->pawrent = $request->pawrent;
        $data->breed = $request->input('breed');
        $data->gender = $request->gender;
        $data->contact = $request->contact;
        $data->address = $request->address;
        $data->dob = $request->dob;
        $data->city = $request->input('city');
        $data->township = $request->input('township');
        $result = $data->save();

        if ($result) {
            return ["result" => "Post Updated"];
        } else {
            return ["result" => "Post Not Updated"];
        }
        // return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $deleteData = Form::find($id);
        $result = $deleteData->delete();
        if ($result){
            return ["result"=>"Post Deleted"];
        } else{
            return ["result"=> "Post Not Deleted"];
        }
    }
}