<?php

namespace App\Http\Controllers;

use App\Models\nilai;
use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = nilai::all();
        return view('home.home', [
            'title' => 'Beranda',
            'data'  => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.createData', [
            'title' => 'Create Data',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'nilaix' => 'required|numeric|min:1|max:33',
            'nilaiy' => 'required|numeric|min:1|max:23',
            'nilaiz' => 'required|numeric|min:1|max:18',
            'nilaiw' => 'required|numeric|min:1|max:13',
        ]);
        nilai::create([
            'name' => $request->name,
            'email' => $request->email,
            'x' => $request->nilaix,
            'y' => $request->nilaiy,
            'z' => $request->nilaiz,
            'w' => $request->nilaiw,
        ]);
        return redirect('/')->with('success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = nilai::findorfail($id);
        return view('home.editData', [
            'title' => 'Edit Data',
            'data'  => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nilaix' => 'required|numeric|min:1|max:33',
            'nilaiy' => 'required|numeric|min:1|max:23',
            'nilaiz' => 'required|numeric|min:1|max:18',
            'nilaiw' => 'required|numeric|min:1|max:13',
        ]);
        nilai::findorfail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'x' => $request->nilaix,
            'y' => $request->nilaiy,
            'z' => $request->nilaiz,
            'w' => $request->nilaiw,
        ]);
        return redirect('/')->with('success', 'Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = nilai::findorfail($id)->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }

    public function laporan($id)
    {
        $data = nilai::findorfail($id);
        $intelegensi = (((40 / 100) * $data->x) + ((60 / 100) * ($data->y / 2)));
        if ($intelegensi >= 1 && $intelegensi <= 4) {
            $intelegensi = 1;
        } elseif ($intelegensi > 4 && $intelegensi <= 8) {
            $intelegensi = 2;
        } elseif ($intelegensi > 8 && $intelegensi <= 12) {
            $intelegensi = 3;
        } elseif ($intelegensi > 12 && $intelegensi <= 16) {
            $intelegensi = 4;
        } elseif ($intelegensi > 16 && $intelegensi <= 20) {
            $intelegensi = 5;
        }

        $ability = (((30 / 100) * $data->z) + ((70 / 100) * ($data->w / 2)));
        if ($ability >= 1 && $ability <= 2.9) {
            $ability = 1;
        } elseif ($ability >2.9 && $ability <= 5.8) {
            $ability = 2;
        } elseif ($ability >5.8  && $ability <=8.7 ) {
            $ability = 3;
        } elseif ($ability >8.7  && $ability <=11.6 ) {
            $ability = 4;
        } elseif ($ability >11.6  && $ability <=14.5 ) {
            $ability = 5;
        }

        return view('home.laporan', [
            'title' => 'Laporan',
            'data'  => $data,
            'ability' => $ability,
            'intelegensi' => $intelegensi,
        ]);
    }
}
