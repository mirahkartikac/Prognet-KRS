<?php

namespace App\Http\Controllers;
use App\Models\Krs;
use Illuminate\Http\Request;

class ApiKrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Krs::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Krs = new Krs();
        $Krs->fill($request->all())->save();
        return $Krs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Krs::find($id);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Krs = Krs::find($id);
        $Krs->fill($request->all())->save();
        return $Krs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Krs = Krs::find($id);
        $Krs->delete();
    }
}
