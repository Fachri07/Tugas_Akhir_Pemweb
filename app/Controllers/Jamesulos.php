<?php 

namespace App\Controllers;

use App\Models\James_Ulos_model;

class JamesUlos extends BaseController {

    public function index()
	{
		return view('login');        
	}

	public function home()
	{
		return view('James_Ulos_view');
	}

	public function order() {
		return view('form_pemesanan');
	}

	public function order_process() {
		$jamesUlosModel = new James_Ulos_model();
		$jamesUlosModel->insert($_POST);
		return view('James_Ulos_view');
	}
	public function view_order(){	
		$model = new James_Ulos_model();
		$data['title'] = 'Detail Pemesanan';		
		$data['getOrder'] = $model->getOrder(); 
		return view('pesanan', $data);
	}
	public function edit($id){
		$model = new James_Ulos_model();
		$data['getOrder'] = $model->getOrder();
		$getOrder = $model->getOrder($id)->getRow();
		if(isset($getOrder)){
			$data['pemesanan'] = $getOrder;
			$data['title'] = 'Ubah Pemesanan';
			return view('edit_pesanan', $data);
		}else{
			echo '<script>
			alert("Data Pemesanan Tidak ditemukan");
			window.location="'.base_url('Jamesulos/home').'"
			</script>';
		}
	}
	public function update(){
		$model = new James_Ulos_model();
		$id = $this->request->getPost('id_pemesanan'); 
		$data = array(
			'nama_pembeli' => $this->request->getPost('nama_pembeli'),
			'alamat' => $this->request->getPost('alamat'),
			'email' => $this->request->getPost('email'),
			'no_hp' => $this->request->getPost('no_hp'),
			'jumlah_pesanan' => $this->request->getPost('jumlah_pesanan'),
			'kode_pos' => $this->request->getPost('kode_pos'),
			'keterangan' => $this->request->getPost('keterangan')
		);
		$model->editOrder($data,$id);
		echo '<script>
		alert("Edit pesanan berhasil");
		window.location="'.base_url('Jamesulos/view_order').'"
		</script>';
	} 
	public function delete($id){
		$model = new James_Ulos_model();
		$getOrder = $model->getOrder($id)->getRow();
		if(isset($getOrder)){
			$model->deleteOrder($id);
			echo '<script>
			alert("Hapus pesanan berhasil");
			window.location="'.base_url('Jamesulos/home').'"
			</script>';
		}else{
			echo '<script>
                    alert("Hapus Gagal, Anda belum melakukan pemesanan");
                    window.location="'.base_url('Jamesulos/home').'"
                </script>';
		}
	}


	// public function order_process(){
	// 	$nama = $this->input->pembeli('nama');
	// 	$alamat = $this->input->pembeli('alamat');
	// 	$email = $this->input->pembeli('email');
	// 	$no_hp = $this->input->pembeli('no_hp');
	// 	$jumlah_pesanan = $this->input->pemesanan('jumlah_pesanan');
	// 	$kode_pos = $this->input->pemesanan('kode_pos');
	// 	$keterangan = $this->input->pemesanan('keterangan');    
	
	// 	$this->load->helper('url');
	// 	$this->load->model('James_Ulos_model');
	
	// 	$this->James_Ulos_model->insert($nama, $alamat, $email, $no_hp, $jumlah_pesanan, $kode_pos, $keterangan);
	// 	redirect(base_url(), 'refresh');
	//   }
}