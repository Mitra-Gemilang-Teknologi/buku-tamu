<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ServiceType;
use App\Models\Visit;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Session;
use App\Models\SubServiceType;
use App\Models\VisitorHasService;
use Illuminate\Support\Facades\DB;

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
				Alert::success(session('success'));
				Alert::question('Terimakasih', 'Apakah Ingin Mengisi Survey?');
				// Alert::info('Terimakasih', 'Data anda berhasil disimpan!');
			}

			if (session('success')) {
				toast('Terimakasih Telah Mengisi Survey', 'success');
			}

			if (session('SurveyAlert')) {
				// Alert::success(session('success'));
				Alert::info('Terimakasih', 'Data  anda berhasil disimpan!');
			}


			if (session('error')) {
				toast('Terjadi kesalahan', 'error');
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
			'serviceType' => ServiceType::all(),
			'kecamatan' => $kecamatan
		]);
	}

	public function list()
	{


		return view('ListTamu.index', [
			'Visit' => Visit::with('village')->with('district')->get(),
			"title" => "List Buku Tamu",
			"active" => "List Buku Tamu",
		]);
	}


	function isi_survey(Request $request)
	{

		try {
			$id = $request->id_visitor;
			$visitor = Visit::where('id', $id)->first();
			$datax = [
				'visitor_id' => $visitor->id,
				'visitor_name' => $visitor->visitor_name,
				'visitor_education' => $visitor->visitor_education,
				'visit_time' => $visitor->visit_time,
				'visitor_village' => $visitor->visitor_village,
				'visitor_disctrict'  =>   $visitor->visitor_disctrict,
				'visitor_address' => $visitor->visitor_address,
				'visitor_neighborhood_association' => $visitor->visitor_neighborhood_association,
				'visitor_citizen_association' =>   $visitor->visitor_citizen_association,
				'visitor_age' => $visitor->visitor_age,
				'visitor_gender' => $visitor->visitor_gender,
				'visit_purpose' => $visitor->visit_purpose,
				'visitor_description' => $visitor->visitor_description,
				'status' => $visitor->status
			];


			session($datax);
			return redirect('/skm');
		} catch (\Throwable $th) {
			return redirect('/list/buku-tamu')->with('error', 'Error during the creation!');
		}
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




		try {
			$validateData = $request->validate([
				'id_service_type' => '',
				'visitor_name' => '',
				'visitor_education' => '',
				'visit_time' => '',
				'visitor_village' => '',
				'visitor_disctrict'  =>   '',
				'visitor_address' => '',
				'visitor_neighborhood_association' => '',
				'visitor_citizen_association' =>   '',
				'visitor_age' => '',
				'visitor_gender' => '',
				'visit_purpose' => '',
				'visitor_description' => '',
				'status' => ''
			]);

			if ($request->visitor_address === null) {
				$validateData['visitor_address'] = $request->visitor_address_detail;
			}

			try {
				$last = Visit::create($validateData);
				if ($request->id_sub_service_type != null) {
					$arr = [];
					foreach ($request->id_sub_service_type as $value) {
						$temp = explode('|', $value);

						$arr[] =  [
							'visitor_id' => $last->id,
							'service_id' => 	$temp[0],
							'sub_service_id' => 	$temp[1]
						];
					}

					DB::table('visitor_has_services')->insert($arr);
				} else {
					$arr = [];
					foreach ($request->id_service_type as $data) {
						$arr[] = [
							'visitor_id' => $last->id,
							'service_id' => 	$data
						];
					}
					DB::table('visitor_has_services')->insert($arr);
				}

				// session($validateData);
				return redirect('/')->with('SurveyAlert', 'Created successfully!');
			} catch (\Throwable $th) {
				dd($th);
				return redirect('/')->with('error', 'Error during the creation!');
			}
		} catch (\Throwable $th) {
			dd($th);
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
	public function subJenisLayanan(Request $request)
	{

		$input = $request->all();

		$data =  ServiceType::with('subServices')->whereIn('id_service_type', $input['id'])->get();

		return response()->json([
			"data" => $data
		]);
	}
}
