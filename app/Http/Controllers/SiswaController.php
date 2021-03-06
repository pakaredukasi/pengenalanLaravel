<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getSiswa = Siswa::all();
        return view('viewData', compact('getSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // eloquent
        // $siswa = new Siswa();
        // $siswa->nama = $request->nama;
        // $siswa->telepon = $request->telepon;
        // $siswa->alamat = $request->alamat;
        // $siswa->save();

        $validated = $request->validate([
            'nama' => 'required | min:3',
            'telepon' => 'required | numeric | digits:12',
            'alamat' => 'required',
        ], [
            'required' => 'Pastikan :attribute field sudah diisi',
            'digits' => 'Bro periksa karakter yang dimasukkan, harus 12 yahhh',
        ]);

        // mass assignment
        Siswa::create($request->all());
        return redirect()->back();
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
        $siswa = Siswa::find($id);
        
        return view('editData', compact('siswa'));
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
        Siswa::updateOrcreate(['id' => $id], $request->all());

        return redirect(route('viewData'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect(route('viewData'));
    }
}
