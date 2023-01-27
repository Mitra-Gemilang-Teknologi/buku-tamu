<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
	function index()
	{
		$countDay = DB::table('visits')
			->where('visit_time', date('Y-m-d'))
			->count();
		$countWeek = DB::select('SELECT COUNT(*) as total
		FROM visits
		WHERE visit_time  BETWEEN
			visit_time
		AND
			visit_time + interval 7 day
		');
		$countYear = DB::table('visits')
			->where(DB::raw('YEAR(visit_time)'), '=', date('Y'))
			->count();
		$countMonth = Visit::select('*')
			->whereMonth('visit_time', Carbon::now()->month)
			->get()
			->count();
		return view('dashboard.index', [
			'countDay' => $countDay,
			'countWeek' => $countWeek[0]->total,
			'countMonth' => $countMonth,
			'countYear' => $countYear,
		]);
	}

	function skm()
	{
		$countDay = DB::table('visits')
			->where('visit_time', date('Y-m-d'))
			->count();
		$countWeek = DB::select('SELECT COUNT(*) as total
		FROM visits
		WHERE visit_time  BETWEEN
			visit_time
		AND
			visit_time + interval 7 day
		');
		$countYear = DB::table('visits')
			->where(DB::raw('YEAR(visit_time)'), '=', date('Y'))
			->count();
		$countMonth = Visit::select('*')
			->whereMonth('visit_time', Carbon::now()->month)
			->get()
			->count();
		return view('dashboard.skm.index', [
			'countDay' => $countDay,
			'countWeek' => $countWeek[0]->total,
			'countMonth' => $countMonth,
			'countYear' => $countYear,
		]);
	}

	function get_jenis_kelamin(Request $request)
	{
		$dataLakiLaki = DB::select('SELECT COUNT(*) as total FROM visits where visitor_gender="Laki-laki"');
		$perempuan = DB::select('SELECT COUNT(*) as total FROM visits where visitor_gender="Perempuan"');
		return response()->json([
			"laki_laki" => $dataLakiLaki,
			"perempuan" => $perempuan,
		]);
	}
	function get_jenis_kelamin_skm(Request $request)
	{
		$dataLakiLaki = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_gender="Laki-laki"');
		$perempuan = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_gender="Perempuan"');
		return response()->json([
			"laki_laki" => $dataLakiLaki,
			"perempuan" => $perempuan,
		]);
	}

	function get_kepuasan_skm(Request $request)
	{
		$dataSangatPuas = DB::select('SELECT COUNT(*) as total FROM satisfactions where point_survey ="3"');
		$dataPuas = DB::select('SELECT COUNT(*) as total FROM satisfactions where point_survey="2"');
		$dataTidakPuas = DB::select('SELECT COUNT(*) as total FROM satisfactions where point_survey="1"');
		return response()->json([
			"sangatPuas" => $dataSangatPuas,
			"Puas" => $dataPuas,
			"TidakPuas" => $dataTidakPuas,
		]);
	}

	function get_data_pendidikan(Request $request)
	{
		$sd = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="SD"');
		$smp = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="SMP"');
		$sma = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="SMA"');
		$d123 = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="D1" OR visitor_education="D2" OR visitor_education="D3"');
		$s1d4 = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="S1" OR visitor_education="D4"');
		$s2 = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="S2"');
		$s3 = DB::select('SELECT COUNT(*) as total FROM visits where visitor_education="S3"');
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
	function get_data_pendidikan_skm(Request $request)
	{
		$sd = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="SD"');
		$smp = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="SMP"');
		$sma = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="SMA"');
		$d123 = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="D1" OR surveyor_education="D2" OR surveyor_education="D3"');
		$s1d4 = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="S1" OR surveyor_education="D4"');
		$s2 = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="S2"');
		$s3 = DB::select('SELECT COUNT(*) as total FROM surveyor where surveyor_education="S3"');
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
		$data = DB::table('visits')
			->groupBy('visit_time')
			->get();
		$arr = [];
		foreach ($data as $val) {
			$arrx["tanggal_kunjungan"] = date('d M Y', strtotime($val->visit_time));
			$arrx["total_kunjungan"] = \App\Models\Visit::where('visit_time', $val->visit_time)->count();
			$arr[] = $arrx;
		}
		return response()->json([
			'data' => $arr,
		]);
	}
	function get_data_kunjungan_skm(Request $request)
	{
		$data = DB::table('surveyor')
			->groupBy('surveyor_time')
			->get();
		$arr = [];
		foreach ($data as $val) {
			$arrx["tanggal_kunjungan"] = date('d M Y', strtotime($val->surveyor_time));
			$arrx["total_kunjungan"] = \App\Models\Surveyor::where('surveyor_time', $val->surveyor_time)->count();
			$arr[] = $arrx;
		}
		return response()->json([
			'data' => $arr,
		]);
	}
}
