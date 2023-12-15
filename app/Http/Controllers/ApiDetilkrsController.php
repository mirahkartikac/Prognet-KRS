<?php

namespace App\Http\Controllers;
use App\Models\Detilkrs;
use Illuminate\Http\Request;

class ApiDetilkrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Detilkrs::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Detilkrs = new Detilkrs();
        $Detilkrs->fill($request->all())->save();
        return $Detilkrs;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Detilkrs::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Detilkrs = Detilkrs::find($id);
        $Detilkrs->fill($request->all())->save();
        return $Detilkrs;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Detilkrs = Detilkrs::find($id);
        $Detilkrs->delete();
    }
}
