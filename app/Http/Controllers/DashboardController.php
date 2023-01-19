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
			->selectRaw('count(id_visit) as countDay')
			->first();


		$countMonth = Kunjungan::select('*')
			->whereMonth('created_at', Carbon::now()->month)
			->get()->count();


		return view('dashboard.index', [
			'countDay' => $countDay,
			'countWeek' => '12',
			'countMonth' => $countMonth
		]);
	}
}
