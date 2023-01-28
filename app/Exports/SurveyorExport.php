<?php

namespace App\Exports;

use App\Models\Surveyor;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SurveyorExport implements FromView
{
	/**
	 * @return \Illuminate\Support\Collection
	 */
	use Exportable;


	public function forDate(string $start, string $end)
	{
		$this->start = $start;
		$this->end = $end;

		return $this;
	}

	public function view(): View
	{

		return view('dashboard.surveytamu.exports', [
			'start' => $this->start,
			'end' => $this->end,
			'Surveyor' => Surveyor::whereBetween('surveyor_time', [$this->start, $this->end])->with('subServices')->get()
		]);
	}
}
