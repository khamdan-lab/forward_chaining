<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Rulebase;
class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gejala = Gejala::all();
        return view('konsultasi.index', compact('gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $hasil_konsultasi = $request->all(); // menampung hasil konsultasi
        $menampung_hasil_konsultasi = []; // array untuk menampung hasil konsultasi
        $penyakit_berdasarkan_gejala = []; // array untuk menampung penyakit dari gejala yang diinputkan
        $penampungan_hasil = []; // array untuk menampung hasil akhir

        foreach ($hasil_konsultasi as $key => $value) {
            array_push($menampung_hasil_konsultasi, $key);
        }

        array_shift($menampung_hasil_konsultasi);
        // return $menampung_hasil_konsultasi;
        foreach ($menampung_hasil_konsultasi as $key => $value) {
            $cari_penyakit = Rulebase::where('kode_gejala', $value)->pluck('kode_penyakit');
            array_push($penyakit_berdasarkan_gejala, $cari_penyakit);
        }
        // return $penyakit_berdasarkan_gejala;

        foreach ($penyakit_berdasarkan_gejala as $key => $item) {
            foreach ($item as $key => $value) {
                array_push($penampungan_hasil, $value);
            }
        }

        // return $penampungan_hasil;

        $jumlah_penyakit = array_count_values($penampungan_hasil);
        return $jumlah_penyakit;
        $hasil = array_key_first($jumlah_penyakit) ;

        // return $hasil;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
