<?php

namespace App\Http\Controllers;

use App\Models\penduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penduduk = penduduk::all();
        return view('home', compact('penduduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_penduduk' => 'required|string|max:250',
        ]);

        $dataPenduduk = explode(' ', $request->data_penduduk);
        $name = isset($dataPenduduk[0]) ? strtoupper($dataPenduduk[0]) : '';
        $age = isset($dataPenduduk[1]) ? strtoupper($dataPenduduk[1]) : '';
        $city = isset($dataPenduduk[2]) ? strtoupper($dataPenduduk[2]) : '';

        $penduduk = new penduduk();
        $penduduk->name = $name;
        $penduduk->age = $age;
        $penduduk->city = $city;
        $penduduk->save();


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
