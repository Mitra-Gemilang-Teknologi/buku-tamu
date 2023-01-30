<?php

namespace App\Http\Controllers;

use App\Models\Surveyor;
use App\Models\Question;
use App\Models\Visit;
use App\Models\AnswerOption;
use App\Models\ServiceType;
use App\Models\SurveyResult;
use Illuminate\Http\Request;
use App\Models\SurveyorHasService;
use Illuminate\Support\Facades\DB;

class SkmController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('skm.index', [
			"title" => "SKM",
			"active" => "SKM",
			'serviceType' => ServiceType::all(),
			'Question' => Question::all(),
			'AnswerOption' => AnswerOption::all()
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

		$Question = Question::all();

		try {
			$validateData = $request->validate([
				'surveyor_name' => 'required',
				'surveyor_education' => 'required',
				'surveyor_gender' => 'required',
				'surveyor_time' => 'required',
				'surveyor_description'  => 'required',
				'surveyor_village' => '',
				'surveyor_disctrict'  =>   '',
				'surveyor_address' => '',
				'surveyor_neighborhood_association' => '',
				'surveyor_citizen_association' =>   '',
				'surveyor_age' => 'required',
			]);


			$validateData['id_answer_option'] = implode(",", $request->id_answer_option);


			try {



				$last = Surveyor::create($validateData);
				Visit::where('id', $request->visitor_id)
					->update([
						'status' => 2
					]);
				foreach ($Question as $Question) {
					SurveyResult::create([
						'id_surveyor' => $last->id,
						'id_question' => $Question->id_question,
						'id_answer_option' => $request->id_answer_option[$Question->id_question]
					]);
				}

				$arr = [];
				foreach ($request->id_sub_service_type as $value) {
					$temp = explode('|', $value);

					$arr[] =  [
						'surveyor_id' => $last->id,
						'service_id' => 	$temp[0],
						'sub_service_id' => 	$temp[1]
					];
				}

				DB::table('surveyor_has_services')->insert($arr);

				// session()->invalidate();
				// session()->regenerateToken();

				session([
					'visitor_id' =>	$last->id,
				]);
				return redirect('/kepuasan');
			} catch (\Throwable $th) {
				return redirect('/skm')->with('error', 'Error during the creation!');
			}
			//code...
		} catch (\Throwable $th) {
			//throw $th;
			return redirect('/skm')->with('error', 'Error during the creation! validate gone wrong');
		}
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

	public function subJenisLayananskm(Request $request)
	{

		$input = $request->all();

		$data =  ServiceType::with('subServices')->whereIn('id_service_type', $input['id'])->get();

		return response()->json([
			"data" => $data
		]);
	}
}
