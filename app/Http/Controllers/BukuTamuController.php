<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\JenisLayanan;
use App\Models\Kunjungan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Session;
class BukuTamuController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function __construct()
	{
		$this->middleware(function ($request, $next) {
			if (session('QuestionAlert')) {
				// Alert::success(session('success'));
				Alert::question('QuestionAlert', 'Lorem ipsum dolor sit amet');
			}
			

			if (session('error')) {
				Alert::error(session('error'));
			}

			return $next($request);
		});
	}
	
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
			'visitor_name' => 'required',
			'visit_time' => 'required',
			'visitor_village' => 'required',
			'visitor_disctrict'  =>   'required',
			'visitor_neighborhood_association' => '',
			'visitor_citizen_association' =>   '',
			'visitor_age' => 'required',
			'visitor_gender' => 'required',
			'number_of_visitor' => 'required',
			'visit_purpose' => 'required',
			'visitor_description' => '',
		]);


		try {
			Kunjungan::create($validateData);
			session($validateData);
			return redirect('/')->with('QuestionAlert', 'Created successfully!');
		} catch (\Throwable $th) {
			return redirect('/')->with('error', 'Error during the creation!');
		}	
	}

	public function remove()
	{

		session()->invalidate();
		session()->regenerateToken();
		return redirect('/');
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
