<?php

namespace App\Http\Controllers;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class ApiMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Matakuliah::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Matakuliah = new Matakuliah();
        $Matakuliah->fill($request->all())->save();
        return $Matakuliah;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Matakuliah::find($id);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Matakuliah = Matakuliah::find($id);
        $Matakuliah->fill($request->all())->save();
        return $Matakuliah;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Matakuliah = Matakuliah::find($id);
        $Matakuliah->delete();
    }
}
