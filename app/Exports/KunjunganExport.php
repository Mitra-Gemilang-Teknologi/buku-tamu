<?php

namespace App\Exports;

use App\Models\Visit;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromQuery;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class KunjunganExport implements WithHeadings, WithMapping, FromView
{
	/**
	 * @return \Illuminate\Support\Collection
	 */

	use Exportable;


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
	// public function query()
	// {
	// 	return Visit::query()->whereBetween('visit_time', [$this->start, $this->end]);
	// }



	public function map($kunjungan): array
	{
		return [
			//data yang dari kolom tabel database yang akan diambil
			// $kunjungan->layanan->service_name,
			$kunjungan->visitor_name,
			$kunjungan->visitor_age,
			$kunjungan->visitor_education,
			$kunjungan->visitor_gender,
			$kunjungan->visitor_disctrict,
			$kunjungan->visitor_village,
			$kunjungan->visitor_citizen_association,
			$kunjungan->visitor_neighborhood_association,
			$kunjungan->visitor_description,
			$kunjungan->visit_time,
			$kunjungan->visit_purpose,
		];
	}

	public function headings(): array
	{
		return [
			// 'Jenis Layanan',
			'Nama',
			'Umur',
			'Pendidikan',
			'Jenis Kelamin',
			'Kecamatan',
			'Desa',
			'Rw',
			'RT',
			'Deskripsi',
			'Tanggal',
			'Tujuan'
		];
	}
}
