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
            'name' => 'required|string|max:150',
            'age' => 'required|string|max:20',
            'city' => 'required|string|max:150',
        ]);

        $name = strtoupper($request->name);
        $age = strtoupper($request->age);
        $city = strtoupper($request->city);

        $penduduk = new penduduk();
        $penduduk->name = $name;
        $penduduk->age = $age;
        $penduduk->city = $city;
        // dd($penduduk);
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
