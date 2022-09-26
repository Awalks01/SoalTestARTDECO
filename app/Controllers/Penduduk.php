<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\PendudukModel;
use App\Models\DesaModel;
use App\Models\KecamatanModel;
use App\Models\KotaModel;
use App\Models\ProvinsiModel;

class Penduduk extends BaseController
{

	protected $penduduk;
	protected $desa;
	protected $kecamatan;
	protected $kota;
	protected $provinsi;

	public function __construct()
	{
		$this->penduduk = new PendudukModel();
		$this->desa = new desaModel();
		$this->kecamatan = new kecamatanModel();
		$this->kota = new kotaModel();
		$this->provinsi = new provinsiModel();
	}
	public function index()
	{
		$data = [
			'penduduk' => $this->penduduk->getPenduduk(),
		];

		// dd($data);
		return view('home', $data);
	}

	public function tambah()
	{
		$data = [
			'kota' => $this->kota->getKota(),
			'desa' => $this->desa->getDesa(),
			'kecamatan' => $this->kecamatan->getKecamatan(),
			'provinsi' => $this->provinsi->getProvinsi(),
		];

		return view('tambah', $data);
	}

	public function acttambah()
	{
		$data = [
			'nama' => $this->request->getVar('nama'),
			'tgl_lahir' => $this->request->getVar('tgl_lahir'),
			'id_kota' => $this->request->getVar('kota'),
			'id_desa' => $this->request->getVar('desa'),
			'id_kecamatan' => $this->request->getVar('kecamatan'),
			'id_provinsi' => $this->request->getVar('provinsi'),
			'status' => $this->request->getVar('status'),
		];

		$save = $this->penduduk->save($data);

		if ($save) {
			session()->setFlashdata('Gagal', 'No. KTP Sudah Ada');
			return redirect()->to('/penduduk');
		}

		return redirect()->to('/penduduk');
	}

	public function acthapus($noktp)
	{

		$this->penduduk->delete($noktp);

		return redirect()->to('/penduduk');
	}

	public function edit($noktp)
	{
		$data = [
			'penduduk' => $this->penduduk->getPenduduk($noktp),
			'kota' => $this->kota->getKota(),
			'desa' => $this->desa->getDesa(),
			'kecamatan' => $this->kecamatan->getKecamatan(),
			'provinsi' => $this->provinsi->getProvinsi(),
		];

		// dd($data);
		return view('/edit', $data);
	}

	public function actupdate($noktp)
	{


		$this->penduduk->save([
			'noktp' => $noktp,
			'nama' => $this->request->getVar('nama'),
			'tgl_lahir' => $this->request->getVar('tgl_lahir'),
			'id_kota' => $this->request->getVar('kota'),
			'id_desa' => $this->request->getVar('desa'),
			'id_kecamatan' => $this->request->getVar('kecamatan'),
			'id_provinsi' => $this->request->getVar('provinsi'),
			'status' => $this->request->getVar('status')
		]);

		return redirect()->to('/penduduk');
	}

	public function print()
	{
		$data = [
			'penduduk' => $this->penduduk->getPenduduk(),
		];

		// dd($data);
		return view('print', $data);
	}
}
