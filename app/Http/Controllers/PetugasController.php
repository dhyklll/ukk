<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::latest()->paginate(5);

        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = User::all();

        return view('petugas.create', [
            'petugas' => $petugas
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
        $request->validate([
            'nik'   =>  'required',
            'name'   =>  'required',
            'username'   =>  'required',
            'password'   =>  'required',
            'jenis_kelamin'   =>  'required',
            'alamat'   =>  'required',
            'phone'   =>  'required',
            'role' => 'required'
        ]);

        User::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        return redirect()->route('petugas.index')->with('success', 'Berhasil Menambahkan Petugas!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $petugas = User::find($id);

        return view('petugas.show', [
            'petugas'   =>  $petugas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = User::find($id);

        return view('petugas.edit',[
            'petugas'   =>  $petugas
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
        $request->validate([
            'nik'   =>  'required',
            'name'   =>  'required',
            'username'   =>  'required',
            'password'   =>  'required',
            'jenis_kelamin'   =>  'required',
            'alamat'   =>  'required',
            'phone'   =>  'required',
            'role' => 'required'
        ]);

        $petugas = User::find($id);

        $petugas->update([
            'nik' => $request->nik,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'role' => $request->role,
        ]);

        return redirect()->route('petugas.index')->with('success', 'Berhasil Update Petugas!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = User::find($id);
        $petugas->delete();

        return redirect()->route('petugas.index')->with('success', 'Berhasil Hapus Petugas!');
    }
}
