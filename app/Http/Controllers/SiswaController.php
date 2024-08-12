<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::with('kelas')->orderByDesc('nilai')->get();

        $kelas = Kelas::orderByDesc('nilai')->get();

        $siswaBerdasarkanKelas = [];

        foreach($kelas as $k) {
            $siswaBerdasarkanKelas[$k->nama] = Siswa::where('id_kelas', $k->id)->get();
        }

        return view('daftarnilaisiswa', [
        'siswa' => $siswa,
        'kelas' => $kelas,
        'siswaBerdasarkanKelas' => $siswaBerdasarkanKelas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahnilaisiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request)
    {
        $formFields = $request->validate([
            'nama' => 'required',
            'id_kelas' => 'required',
            'matematika' => 'required',
            'kimia' => 'required',
            'fisika' => 'required',
            'biologi' => 'required'
        ]);

        $formFields['nilai'] = ($formFields['matematika'] + $formFields['kimia'] + $formFields['fisika'] + $formFields['biologi']) / 4;

        Siswa::create($formFields);

        $kelas = Kelas::find($formFields['id_kelas']);
        $kelas->nilai += $formFields['nilai'];
        $kelas->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        $siswa = $siswa->load('kelas');
        
        return view('detailnilaisiswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
