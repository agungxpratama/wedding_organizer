<?php

class Vendor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_vendor');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/konten');
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function daftar_vendor()
	{
		$data['vendor'] = $this->model_vendor->tampil_data()->result();
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function daftar()
	{
		$data['vendor'] = $this->model_vendor->tampil_data()->result();
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/daftar', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function tambah()
	{
		$data['vendor'] = $this->model_vendor->tampil_data()->result();
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/tambah', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}


	public function tambah_data()
	{

		$nama_vendor = $this->input->post('nama_vendor');
		$kategori = $this->input->post('kategori');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$image = $_FILES['image']; // ambil dari name form
		if ($image != null) {
			$config['upload_path'] = './assets/images'; // folder
			$config['allowed_types'] = 'jpeg|jpg|png';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('image')) { // ambil dari name form
				echo "Upload Gagal";
				die();
			} else {
				$image = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_vendor' 	=> $nama_vendor,
			'kategori' 		=> $kategori,
			'paket'			=> $paket,
			'harga' 		=> $harga,
			'keterangan' 	=> $keterangan,
			'image'			=> $image
			// 'nama kolom di db' => $nama_variabel
		);

		$this->model_vendor->tambah_data($data);
		redirect('vendor/daftar');
	}

	public function pesanan()
	{
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/pesanan');
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function riwayat()
	{
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/riwayat');
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}
	public function lihat()
	{
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/lihat_pesanan');
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function hapus($id)
	{
		$where = array('idjasa' => $id);
		$this->model_vendor->hapus_data($where, 'tb_jasa');
		redirect('vendor/daftar');
	}

	public function edit($id)
	{
		$data['vendor'] = $this->model_vendor->edit_data($id)->result();
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/edit', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function edit_data($id)
	{

		$data['vendor'] = $this->model_vendor->edit_data($id)->result();

		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/edit', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama_vendor');
		$kategori = $this->input->post('kategori');
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$image = $this->input->post('image');

		$data = array(
			'nama_vendor' => $nama,
			'kategori' => $kategori,
			'paket' => $paket,
			'harga' => $harga,
			'keterangan' => $keterangan,
			'image' => $image
		);

		$this->model_vendor->update_data($data, $id);
		redirect('vendor');
	}

	public function detail($idjasa)
	{
		$data['vendor'] = $this->model_vendor->detail_paket($idjasa);
		$this->load->view('vendor/head');
		$this->load->view('vendor/header');
		$this->load->view('vendor/leftside');
		$this->load->view('vendor/detail_paket', $data);
		// $this->load->view('vendor/footer');
		$this->load->view('vendor/js');
	}
}
