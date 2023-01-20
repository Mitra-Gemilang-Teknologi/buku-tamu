<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
	function index()
	{
		$countDay = DB::table('kunjungan')
			->where('visit_time', date('Y-m-d'))
			->count();
		$countMonth = Kunjungan::select('*')
			->whereMonth('visit_time', Carbon::now()->month)
			->get()->count();
		return view('dashboard.index', [
			'countDay' => $countDay,
			'countWeek' => '12',
			'countMonth' => $countMonth
		]);
	}

	function get_jenis_kelamin(Request $request)
	{
		$dataLakiLaki = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_gender="Laki-laki"');
		$perempuan = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_gender="Perempuan"');
		return response()->json([
			"laki_laki" => $dataLakiLaki,
			"perempuan" => $perempuan,
		]);
	}

	function get_data_pendidikan(Request $request)
	{
		$sd = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="SD"');
		$smp = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="SMP"');
		$sma = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="SMA"');
		$d123 = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="D1" OR visitor_gender="D2" OR visitor_gender="D3"');
		$s1d4 = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="S1" OR visitor_education="D4"');
		$s2 = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="S2"');
		$s3 = DB::select('SELECT COUNT(*) as total FROM kunjungan where visitor_education="S3"');
		return response()->json([
			"sd" => $sd,
			"smp" => $smp,
			"sma" => $sma,
			"d123" => $d123,
			"s1d4" => $s1d4,
			"s2" => $s2,
			"s3" => $s3,
		]);
	}

	function get_data_kunjungan(Request $request)
	{
		$data = DB::table('kunjungan')
			->groupBy('visit_time')
			->get();
		$arr = [];
		foreach ($data as $val) {
			$arrx["tanggal_kunjungan"] = date('d M Y', strtotime($val->visit_time));
			$arrx["total_kunjungan"] = \App\Models\Kunjungan::where('visit_time', $val->visit_time)->count();
			$arr[] = $arrx;
		}
		return response()->json([
			'data' => $arr,
		]);
	}
}
