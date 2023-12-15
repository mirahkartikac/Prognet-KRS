<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class ApiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mahasiswa::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Mahasiswa = new Mahasiswa();
        $Mahasiswa->fill($request->all())->save();
        return $Mahasiswa;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Mahasiswa::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->fill($request->all())->save();
        return $Mahasiswa;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Mahasiswa = Mahasiswa::find($id);
        $Mahasiswa->delete();
    }
}
