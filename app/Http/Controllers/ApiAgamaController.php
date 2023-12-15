<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;

class ApiAgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Agama::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Agama = new Agama();
        $Agama->fill($request->all())->save();
        return $Agama;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Agama::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Agama = Agama::find($id);
        $Agama->fill($request->all())->save();
        return $Agama;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Agama = Agama::find($id);
        $Agama->delete();
    }
}
