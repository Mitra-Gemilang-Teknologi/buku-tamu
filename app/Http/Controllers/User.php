<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
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
		return view('dashboard.profile.index',
		['countNotif'=>$countNotif,
			'dataNotif' => $dataNotif
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
    public function update(Request $Request)
    {
		var_dump($Request->id); 
		var_dump($Request->name); 
		var_dump($Request->email); 
		var_dump($Request->id); 
		die();
        try {
            $Data = User::where('id', $Request->name);
            if(!empty($Request->password)){
                $Data->update([
                    'name' => $Request->name,
                    'email' => $Request->email,
                    'password' => Hash::make($Request->password),
                ]);
            }
            else{
                $Data->update([
                    'name' => $Request->name,
                    'email' => $Request->email,
                ]);
            }
			return  redirect('/dashboard/profil')->with('success', 'Data Berhasil di Ubah!');
        } catch (QueryException $e) {
			return  redirect('/dashboard/profil')->with('success', $e->getMessage());
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
}
