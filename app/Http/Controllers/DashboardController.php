<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use App\Models\SubServiceType;
use App\Models\Surveyor;
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
		$countNotif = DB::table('visits')
			->where('status', '=', '0')
			->count();
		$dataNotif = DB::table('visits')
			->where('status', '=', '0')
			->limit(3)
			->get();
		return view('dashboard.index', [
			'countNotif' => $countNotif,
			'dataNotif' => $dataNotif,
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
		$countNotif = DB::table('visits')
			->where('status', '=', '0')
			->count();
		$dataNotif = DB::table('visits')
			->where('status', '=', '0')
			->limit(3)
			->get();
		return view('dashboard.skm.index', [
			'countNotif' => $countNotif,
			'dataNotif' => $dataNotif,
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
	function get_data_kunjungan_layanan(Request $request)
	{
		$layanan = ServiceType::all();
		$Datalayanan = [];
		$no = 1;
		foreach ($layanan as $layanan) {
			$datax['layanan'] = $layanan->service_name;
			$datax['total'] = \App\Models\VisitorHasService::where('service_id', $layanan->id_service_type)->count();
			$Datalayanan[] = $datax;
		};

		return response()->json([
			'data' => $Datalayanan,
		]);
	}


	function get_data_kunjungan_mingguan(Request $request)
	{
		$minggu1 = DB::select('SELECT COUNT(WEEK(visit_time)) as total FROM `visits` WHERE WEEK(visit_time)="1"');
		$minggu2 = DB::select('SELECT COUNT(WEEK(visit_time)) as total FROM `visits` WHERE WEEK(visit_time)="2"');
		$minggu3 = DB::select('SELECT COUNT(WEEK(visit_time)) as total FROM `visits` WHERE WEEK(visit_time)="3"');
		$minggu4 = DB::select('SELECT COUNT(WEEK(visit_time)) as total FROM `visits` WHERE WEEK(visit_time)="4"');
		$minggu5 = DB::select('SELECT COUNT(WEEK(visit_time)) as total FROM `visits` WHERE WEEK(visit_time)="5"');
		return response()->json([
			"minggu1" => $minggu1,
			"minggu2" => $minggu2,
			"minggu3" => $minggu3,
			"minggu4" => $minggu4,
			"minggu5" => $minggu5,
		]);
	}
	function get_data_kunjungan_bulanan(Request $request)
	{
		$Databulan = [1 => "January", 2 => "February", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni", 7 => "July", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"];
		foreach ($Databulan as $key => $val) {
			$arrx["bulan"] = $val;
			$arrx["total_kunjungan"] = DB::select('SELECT COUNT(*) as total FROM visits WHERE MONTH(visit_time)=' . $key . '');
			$arr[] = $arrx;
		}
		return response()->json([
			'data' => $arr,
		]);
	}


	function get_data_kunjungan_mingguan_skm(Request $request)
	{
		$minggu1 = DB::select('SELECT COUNT(WEEK(surveyor_time)) as total FROM `surveyor` WHERE WEEK(surveyor_time)="1"');
		$minggu2 = DB::select('SELECT COUNT(WEEK(surveyor_time)) as total FROM `surveyor` WHERE WEEK(surveyor_time)="2"');
		$minggu3 = DB::select('SELECT COUNT(WEEK(surveyor_time)) as total FROM `surveyor` WHERE WEEK(surveyor_time)="3"');
		$minggu4 = DB::select('SELECT COUNT(WEEK(surveyor_time)) as total FROM `surveyor` WHERE WEEK(surveyor_time)="4"');
		$minggu5 = DB::select('SELECT COUNT(WEEK(surveyor_time)) as total FROM `surveyor` WHERE WEEK(surveyor_time)="5"');
		return response()->json([
			"minggu1" => $minggu1,
			"minggu2" => $minggu2,
			"minggu3" => $minggu3,
			"minggu4" => $minggu4,
			"minggu5" => $minggu5,
		]);
	}
	function get_data_kunjungan_bulanan_skm(Request $request)
	{
		$Databulan = [1 => "January", 2 => "February", 3 => "Maret", 4 => "April", 5 => "Mei", 6 => "Juni", 7 => "July", 8 => "Agustus", 9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"];
		foreach ($Databulan as $key => $val) {
			$arrx["bulan"] = $val;
			$arrx["total_kunjungan"] = DB::select('SELECT COUNT(*) as total FROM surveyor WHERE MONTH(surveyor_time)=' . $key . '');
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

	public function get_survey_unsur_pelayanan(Request $request)
	{
		$answer1 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_1 FROM survey_result WHERE id_question="1"');
		$answer2 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_2 FROM survey_result WHERE id_question="2"');
		$answer3 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_3 FROM survey_result WHERE id_question="3"');
		$answer4 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_4 FROM survey_result WHERE id_question="4"');
		$answer5 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_5 FROM survey_result WHERE id_question="5"');
		$answer6 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_6 FROM survey_result WHERE id_question="6"');
		$answer7 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_7 FROM survey_result WHERE id_question="7"');
		$answer8 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_8 FROM survey_result WHERE id_question="8"');
		$answer9 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) as answer_9 FROM survey_result WHERE id_question="9"');
		return response()->json([
			'answer_1' => $answer1,
			'answer_2' => $answer2,
			'answer_3' => $answer3,
			'answer_4' => $answer4,
			'answer_5' => $answer5,
			'answer_6' => $answer6,
			'answer_7' => $answer7,
			'answer_8' =>  $answer8,
			'answer_9' => $answer9,
		]);
	}


	function get_data_kunjungan_layanan_skm(Request $request)
	{
		$layanan = ServiceType::all();
		$Datalayanan = [];
		$no = 1;
		foreach ($layanan as $layanan) {
			$datax['layanan'] = $layanan->service_name;
			$datax['total'] = \App\Models\SurveyorHasService::where('service_id', $layanan->id_service_type)->count();
			$Datalayanan[] = $datax;
		};

		return response()->json([
			'data' => $Datalayanan,
		]);
	}

	public function get_hasil_triwulan(Request $request)
	{
		switch ($request["param"]) {
			case "1":
				$where = 'MONTH(created_at) BETWEEN 1 AND 3';
				$info = 'Periode Survey Bulan Januari - Maret';
				break;
			case "2":
				$where = 'MONTH(created_at) BETWEEN 4 AND 6';
				$info = 'Periode Survey Bulan April - Juni';
				break;
			case "3":
				$where = 'MONTH(created_at) BETWEEN 7 AND 9';
				$info = 'Periode Survey Bulan Juli - September';
				break;
			case "4":
				$where = 'MONTH(created_at) BETWEEN 9 AND 12';
				$info = 'Periode Survey Bulan Oktober - Desember';
				break;
			default:
				$where = 'MONTH(created_at) BETWEEN 1 AND 3';
				$info = 'Periode Survey Bulan Januari - Maret';
		}
		$answer1 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="1"
		AND ' . $where . '');
		$answer2 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="2"
		AND ' . $where . '');
		$answer3 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="3"
		AND ' . $where . '');
		$answer4 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="4"
		AND ' . $where . '');
		$answer5 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="5"
		AND ' . $where . '');
		$answer6 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="6"
		AND ' . $where . '');
		$answer7 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="7"
		AND ' . $where . '');
		$answer8 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="8"
		AND ' . $where . '');
		$answer9 = DB::select('SELECT (SUM(id_answer_option)/COUNT(*)) * 0.1 as answer FROM survey_result WHERE id_question="9"
		AND ' . $where . '');
		$totalResponden = DB::select('SELECT COUNT(*) as total FROM surveyor WHERE ' . $where . '');
		return response()->json([
			'answer' => ($answer1[0]->answer + $answer2[0]->answer + $answer3[0]->answer +  $answer4[0]->answer + $answer5[0]->answer + $answer6[0]->answer + $answer7[0]->answer + $answer8[0]->answer + $answer9[0]->answer) * 25,
			'total_responden' => $totalResponden,
			'label_survey' => $info
		]);
	}
}
