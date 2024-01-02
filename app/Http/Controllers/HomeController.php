<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = pengguna::all();
        return view('home', compact('pengguna'));
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
            'data_pengguna' => 'required|string|max:250',
        ]);

        $datapengguna = explode(' ', $request->data_pengguna);
        $name = isset($datapengguna[0]) ? strtoupper($datapengguna[0]) : '';
        $age = isset($datapengguna[1]) ? strtoupper($datapengguna[1]) : '';
        $city = isset($datapengguna[2]) ? strtoupper($datapengguna[2]) : '';

        $pengguna = new pengguna();
        $pengguna->name = $name;
        $pengguna->age = $age;
        $pengguna->city = $city;
        $pengguna->save();


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
