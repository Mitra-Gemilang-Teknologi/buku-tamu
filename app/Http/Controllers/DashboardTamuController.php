<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Exports\KunjunganExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardTamuController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		if (auth()->guest()) {
			abort(403);
		}


		return view('dashboard.bukutamu.index', [
			'Visit' => Visit::with('village')->with('district')->get(),

		]);
	}
	public function export_excel(Request $request)
	{

		$start = $request->awal;
		$end = $request->akhir;

		return (new KunjunganExport)->forDate($start, $end)->download('Laporan Kunjungan Dari ' . $start . ' Sampai ' . $end . '.xlsx');
		// return Excel::download((new KunjunganExport)->forYear($start), 'kunjungan.xlsx');
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
		//
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
