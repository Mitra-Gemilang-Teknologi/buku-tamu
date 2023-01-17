<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\JenisLayanan;
use App\Models\Kunjungan;

class BukuTamuController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$kecamatan = \Indonesia::findCity(167, ['districts'])->districts->pluck('name', 'id');
		return view('bukuTamu.index', [
			"title" => "Buku Tamu",
			"active" => "Buku Tamu",
			'jenisLayanan' => JenisLayanan::all(),
			'kecamatan' => $kecamatan
		]);
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
	public function store(Request $request)
	{




		$validateData = $request->validate([
			'nama' => '',
			'waktu_kunjungan' => '',
			'desa' => '',
			'kecamatan'  =>   '',
			'rt' => '',
			'rw' =>   '',
			'usia' => '',
			'jenis_kelamin' => '',
			'jml_pengunjung' => '',
			'tujuan' => '',
			'keterangan' => '',
		]);




		Kunjungan::create($validateData);

		return redirect('/')->with('success', 'New Post has been added!');
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
