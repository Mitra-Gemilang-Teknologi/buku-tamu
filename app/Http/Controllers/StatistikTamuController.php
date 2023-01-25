<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikTamuController extends Controller
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
		return view('statistik.bukuTamu.index', [
			'countDay' => $countDay,
			'countWeek' => $countWeek[0]->total,
			'countMonth' => $countMonth,
			'countYear' => $countYear,
			'title' => 'Statistik Buku Tamu',
			"active" => "STATISTIKTAMU",
		]);
	}
}
