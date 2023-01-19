<?php

namespace App\Exports;

use App\Models\Kunjungan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class KunjunganExport implements FromCollection, WithHeadings, WithMapping
{
	/**
	 * @return \Illuminate\Support\Collection
	 */
	public function collection()
	{
		return Kunjungan::all();
	}
	public function map($kunjungan): array
	{
		return [
			//data yang dari kolom tabel database yang akan diambil
			$kunjungan->layanan->service_name,
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
			'Jenis Layanan',
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
