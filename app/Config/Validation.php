<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------


	public $login = [
		'username'     => 'required',
		'password'     => 'required',
	];

	public $login_errors = [
		'username'    => [
			'required' => 'Username wajib diisi.',
		],
		'password'    => [
			'required' => 'Password wajib diisi.',
		]
	];

	public $register = [
		'nama_depan'     => 'required',
		'nama_belakang'     => 'required',
		'username'     => 'required|is_unique[user.username]',
		'password'     => 'required',
		'confirm_password'     => 'required|matches[password]'
	];

	public $register_errors = [
		'nama_depan'    => [
			'required' => 'Nama Depan wajib diisi.',
		],
		'nama_belakang'    => [
			'required' => 'Nama Belakang wajib diisi.',
		],
		'username'    => [
			'required' => 'Username wajib diisi.',
			'is_unique' => 'Username sudah digunakan.',
		],
		'password'    => [
			'required' => 'Password wajib diisi.',
		],
		'confirm_password'    => [
			'required' => 'Konfirmasi Password wajib diisi.',
			'matches' => 'Konfirmasi password tidak sama dengan password'
		],
	];

	public $siswa = [
		'nama'     => 'required',
		'nisn'     => 'required|is_unique[siswa.nisn]',
		'tempat_lahir'     => 'required',
		'tgl_lahir'     => 'required',
		'jenis_kelamin'     => 'required',
		'agama'     => 'required',
		'sekolah_asal'     => 'required',
		'nilai_mtk'     => 'required',
		'nilai_inggris'     => 'required',
		'foto'     		=> 'uploaded[foto]|max_size[foto,1024]|mime_in[foto,foto/jpg,foto/jpeg,foto/png]',
	];

	public $siswa_errors = [
		'nama'    => [
			'required' => 'Nama wajib diisi.',
		],
		'nisn'    => [
			'required' => 'NISN wajib diisi.',
			'is_unique' => 'NISN sudah terdaftar.',
		],
		'tempat_lahir'    => [
			'required' => 'Tempat lahir wajib diisi.',
		],
		'tgl_lahir'    => [
			'required' => 'Tanggal lahir wajib diisi.',
		],
		'jenis_kelamin'    => [
			'required' => 'Jenis kelamin wajib diisi.',
		],
		'agama'    => [
			'required' => 'Agama wajib diisi.',
		],
		'sekolah_asal'    => [
			'required' => 'Sekolah asal wajib diisi.',
		],
		'nilai_mtk'    => [
			'required' => 'Nilai matematika wajib diisi.',
		],
		'nilai_inggris'    => [
			'required' => 'Nilai inggris wajib diisi.',
		],
		'foto'    => [
			// 'required' => 'Foto wajib diisi.',
			'uploaded'  => 'Foto wajib diisi',
			'max_size' => 'Ukuran foto terlalu besar.',
			'mime_in' => 'Yang anda pilih bukan gambar.'
		],
	];

	public $siswaedit = [
		'status'     => 'required',
	];

	public $siswaedit_errors = [
		'nama'    => [
			'required' => 'Status wajib diisi.',
		],
	];
}
