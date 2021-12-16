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
}
