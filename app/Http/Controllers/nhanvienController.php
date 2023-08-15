<?php

namespace App\Http\Controllers;

use App\Http\Requests\nhanvienRequest;
use App\Models\nhanvien;
use Illuminate\Http\Request;

class nhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanvien = nhanvien::paginate(3);
        return view("nhanvien.index",compact("nhanvien"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("nhanvien.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(nhanvienRequest $request)
    {
        $data = [
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "phone"=>$request->input("phone"),
        ];
        nhanvien::create($data);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nhanvien = nhanvien::find($id);
        return view("nhanvien.edit",compact("nhanvien"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(nhanvienRequest $request,$id)
    {
        $data = [
            "name"=>$request->input("name"),
            "email"=>$request->input("email"),
            "phone"=>$request->input("phone"),
        ];
        nhanvien::find($id)->update($data);
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request){
        $input = $request->input("search");
        $nhanvien = nhanvien::where("name","like","%"."$input"."%")->paginate(3);
        return view("nhanvien.index",compact("nhanvien"));
    }
}
