<?php

namespace App\Exports;

use App\Models\Visit;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KunjunganExport implements FromView
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
		return view('dashboard.bukutamu.exports', [
			'start' => $this->start,
			'end' => $this->end,
			'visits' => Visit::whereBetween('visit_time', [$this->start, $this->end])->with('subServices')->get()
		]);
	}
}
