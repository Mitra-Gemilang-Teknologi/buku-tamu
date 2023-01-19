<?php

namespace App\Http\Controllers;

use App\Models\Surveyor;
use App\Models\Pertanyaan;
use App\Models\OpsiJawaban;
use App\Models\JenisLayanan;
use App\Models\survey_result;
use Illuminate\Http\Request;

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
			'jenisLayanan' => JenisLayanan::all(),
			'Pertanyaan' => Pertanyaan::all(),
			'OpsiJawaban' => OpsiJawaban::all()
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


		$Pertanyaan = Pertanyaan::all();

		try {
			$validateData = $request->validate([
				'id_service_type' => 'required',
				'surveyor_name' => 'required',
				'surveyor_phone' => 'required',
				'surveyor_education' => 'required',
				'surveyor_gender' => 'required',
				'surveyor_description'  => 'required',
			]);


			$validateData['id_answer_option'] = implode(",", $request->id_answer_option);

			try {
				$last = Surveyor::create($validateData);

				foreach ($Pertanyaan as $Pertanyaan) {
					survey_result::create([
						'id_surveyor' => $last->id,
						'id_question' => $Pertanyaan->id_question,
						'id_answer_option' => $request->id_answer_option[$Pertanyaan->id_question]			
					]);
				}

				session()->invalidate();
				session()->regenerateToken();

				return redirect('/')->with('success', 'Created successfully!');
			} catch (\Throwable $th) {
				return redirect('/')->with('error', 'Error during the creation!');
			}
			//code...
		} catch (\Throwable $th) {
			//throw $th;
			return redirect('/')->with('error', 'Error during the creation!');
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
}
