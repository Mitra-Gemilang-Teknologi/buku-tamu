<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use App\Exports\KunjunganExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class DashboardTamuController extends Controller
{

	public function __construct()
	{
		$this->middleware(function ($request, $next) {

			if (session('success')) {
				toast('Data Berhasil di Ubah!', 'success');
			}
			if (session('error')) {
				toast('Terjadi kesalahan', 'error');
			}

			return $next($request);
		});
	}
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
		$countNotif = DB::table('visits')
			->where('status', '=', '0')
			->count();
		$dataNotif = DB::table('visits')
			->where('status', '=', '0')
			->limit(3)
			->get();

		return view('dashboard.bukutamu.index', [
			'countNotif' => $countNotif,
			'dataNotif' => $dataNotif,
			'Visit' => Visit::with('village')->with('district')->orderBy('id','DESC')->get(),
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
	public function updateTamu(Request $request)
	{

		try {
			Visit::where('id', $request->visitor_id)
				->update([
					'status' => 1
				]);

			return  redirect('/dashboard/bukutamu')->with('success', 'Data Berhasil di Ubah!');
		} catch (\Throwable $th) {
			dd($th);
		}
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

	public function delete($id){
        DB::table('visits')->where('id', $id)->delete();
        DB::table('visitor_has_services')->where('visitor_id', $id)->delete();
        
        return  redirect('/dashboard/bukutamu')->with('success', 'Data Berhasil di Hapus!');	
	}
}
