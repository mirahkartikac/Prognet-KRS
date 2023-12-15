<?php

namespace App\Http\Controllers;
use App\Models\Detilkrs;
use Illuminate\Http\Request;

class ApiDetilkrsController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menampilkan urutan dari database database_krs
     */
    public function index()
    {
        return Detilkrs::all();
    }

    /**
     * Store a newly created resource in storage.
     * Membuat data baru dan dimasukkan ke database_krs.
     */
    public function store(Request $request)
    {
        $Detilkrs = new Detilkrs();
        $Detilkrs->fill($request->all())->save();
        return $Detilkrs;
    }

    /**
     * Display the specified resource.
     * Menampilkan data yang spesifik.
     * Contohnya menampilkan 1 data saja.
     */
    public function show(string $id)
    {
        return Detilkrs::find($id);
    }


    /**
     * Update the specified resource in storage.
     * Memperbaharui data spesifik di database_krs.
     */
    public function update(Request $request, string $id)
    {
        $Detilkrs = Detilkrs::find($id);
        $Detilkrs->fill($request->all())->save();
        return $Detilkrs;
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus data spesifik dari database.
     */
    public function destroy(string $id)
    {
        $Detilkrs = Detilkrs::find($id);
        $Detilkrs->delete();
    }
}
