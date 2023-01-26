<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satisfaction;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Session;

class SatisfactionController extends Controller
{

	public function index()
	{
		return view('kepuasan.index', [
			"title" => "kepuasan",
		]);
	}
	public function store(Request $request)
	{
		try {
			$data = [
				'visitor_id' => $request->visitor_id,
				'point' => $request->point
			];
			Satisfaction::create($data);
			session()->invalidate();
			session()->regenerateToken();
			return redirect('/')->with('success', 'Created successfully!');
		} catch (\Throwable $th) {
			return redirect('/kepuasan')->with('error', '');
		}
	}
}
