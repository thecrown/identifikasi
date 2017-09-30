<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class operator extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('moperator');
        $this->load->helper(array('form', 'url', 'inflector'));
        $this->load->library('form_validation', 'upload');
        $session_data = $this->session->userdata('level');
        if ($session_data == 'administrator') {
            redirect(base_url('administrator'));
        // } else if ($session_data == 'operator') {
        //     redirect(base_url('index.php/operator/'));
        // } else {
        //     redirect(base_url('index.php/'));
        }
        
    }
/***********************************************************************/ //contructor
    public function index() {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/index');
        //var_dump($session_data);
    }
/***********************************************************************/ //
    public function pengaturanakun($id) {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data1['prodi'] = $session_data = $this->session->userdata('prodi');
        $data['identitas'] = $this->moperator->getidentitasuser($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/pengaturanakun', $data);
    }
    function simpanpengaturanakun() {
        $username = $this->input->post('username');
        $password = base64_encode(base64_encode($this->input->post('pw')));
        $data = array(
            //'username'=>$username,
            'password' => $password,
                //'email'=>$email,
                //'status'=>$status,
                //'level'=>$level
        );
        $this->moperator->simpanpengaturanakun($data);
          echo "<script>
                    alert('Pembaharuan Password Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/index';
                </script>";
    }
    function tambahakun()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/tambahdatauser');
    }
     function simpandatauser() {
		$data1['hasil'] = $this->moperator->getDatauserxx();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/datauser';
                </script>";
        } 
		else 
		{
        $username = $this->input->post('username');
        $password = base64_encode(base64_encode($this->input->post('password')));
        $status = $this->input->post('status');
        $level = $this->input->post('level');
        $data = array(
            'username' => $username,
            'password' => $password,
            'status' => $status,
            'level' => $level
        );
        $this->moperator->simpandatauser($data);
        echo "<script>
                    alert('Pembaharuan Password Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/tambahakun';
                </script>";
		}
    }

 /***********************************************************************/ //
    function inputdata()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/inputdata');
    }
/***********************************************************************/ //
    function inputkategori()
    {
          $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/inputkategori');
    }
    
    function simpankategori() {
        $kategori = $this->input->post('kategori');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakategori();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkategori';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_kategori' => $kategori,
            'status'=>$status
        );
        $this->moperator->simpankategori($data);
        echo "<script>
                    alert('Data kategori Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkategori';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
    function simpaneditkategori() {
        $kategori = $this->input->post('kategori');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakategori();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkategori';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_kategori' => $kategori,
            'status'=>$status
        );
        $this->moperator->simpaneditkategori($data);
        echo "<script>
                    alert('Data kategori Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkategori';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
    public function editdatakategori($id) {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditkategori($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editkategori', $data);
    }
    function hapuskategori($id) {
        $this->moperator->hapuskategori($id);
        redirect('index.php/operator/inputkategori');
    }
/***********************************************************************/ //

function inputsparepart()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/inputsparepart');
    }
function lanjutinputpart(){
		$data1['username'] = $session_data = $this->session->userdata('username');
		$this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/inputpart');
}
function simpansparepart() {
        $kategori = $this->input->post('kategori');
		if($kategori=='Plat')
		{
			$namasparepart = $this->input->post('namasparepart');
			$namabahan = $this->input->post('namabahan');
			$masajenissparepart = $this->input->post('massajenis');
			$namakendaraan=$this->input->post('nama_kendaraan');
			$status="1";
			$berat="0";
			$data1['hasil'] = $this->moperator->getdatasparepart();
				if (!empty($data1['hasil'])) {
					echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
				} 
				else 
				{
					$data = array(
						'nama_kategori'=>$kategori,
						'nama_sparepart' => $namasparepart,
						'massajenis' => $masajenissparepart,
						'bahan'=>$namabahan,
						'jenis_kendaraan'=>$namakendaraan,
						'berat'=>$berat,
						'status'=>$status
					);
					$this->moperator->simpansparepart($data);
					echo "<script>
					        alert('Data kategori Berhasil Disimpan.');
							window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
						    </script>";
					//redirect('index.php/operator/bacakategori');
				}
		}
		else if($kategori=='Kerangka')
		{
			$namasparepart = $this->input->post('namasparepart');
			$namabahan = $this->input->post('namabahan');
			$masajenissparepart = "0";
			$berat = $this->input->post('berat');
			$namakendaraan=$this->input->post('nama_kendaraan');
			$status="1";
			$data1['hasil'] = $this->moperator->getdatasparepart();
				if (!empty($data1['hasil'])) {
					echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
				} 
				else 
				{
					$data = array(
						'nama_kategori'=>$kategori,
						'nama_sparepart' => $namasparepart,
						'massajenis' => $masajenissparepart,
						'bahan'=>$namabahan,
						'berat' => $berat,
						'jenis_kendaraan'=>$namakendaraan,
						'status'=>$status
					);
					$this->moperator->simpansparepart($data);
					echo "<script>
								alert('Data kategori Berhasil Disimpan.');
								window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
							</script>";
					//redirect('index.php/operator/bacakategori');
				}
		}
		else if($kategori=='Absorber / Bantalan Kayu')
		{
			$namasparepart = $this->input->post('namasparepart');
			$namabahan = $this->input->post('namabahan');
			$masajenissparepart = $this->input->post('massajenis');
			$namakendaraan=$this->input->post('nama_kendaraan');
			$status="1";
			$berat="0";
			$data1['hasil'] = $this->moperator->getdatasparepart();
				if (!empty($data1['hasil'])) {
					echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
				} 
				else 
				{
					$data = array(
						'nama_kategori'=>$kategori,
						'nama_sparepart' => $namasparepart,
						'massajenis' => $masajenissparepart,
						'bahan'=>$namabahan,
						'jenis_kendaraan'=>$namakendaraan,
						'berat'=>$berat,
						'status'=>$status
					);
					$this->moperator->simpansparepart($data);
					echo "<script>
								alert('Data kategori Berhasil Disimpan.');
								window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
							</script>";
					//redirect('index.php/operator/bacakategori');
				}
		}
		else if($kategori=='Aksesoris')
		{
			$namasparepart = $this->input->post('namasparepart');
			$namabahan = $this->input->post('namabahan');
			$masajenissparepart = "0";
			$berat = $this->input->post('berat');
			$namakendaraan=$this->input->post('namakendaraaan');
			$status="1";
			$data1['hasil'] = $this->moperator->getdatasparepart();
				if (!empty($data1['hasil'])) {
					echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
				} 
				else 
				{
					$data = array(
						'nama_kategori'=>$kategori,
						'nama_sparepart' => $namasparepart,
						'massajenis' => $masajenissparepart,
						'berat' => $berat,
						'bahan'=>$namabahan,
						'jenis_kendaraan'=>$namakendaraan,
						'status'=>$status
					);
					$this->moperator->simpansparepart($data);
					echo "<script>
								alert('Data kategori Berhasil Disimpan.');
								window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
							</script>";
					//redirect('index.php/operator/bacakategori');
				}
		}else
		{
		    $namasparepart = $this->input->post('namasparepart');
			$namabahan = $this->input->post('namabahan');
			$masajenissparepart = $this->input->post('massajenis');
			$namakendaraan=$this->input->post('nama_kendaraan');
			$status="1";
			$berat="0";
			$data1['hasil'] = $this->moperator->getdatasparepart();
				if (!empty($data1['hasil'])) {
					echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
				} 
				else 
				{
					$data = array(
						'nama_kategori'=>$kategori,
						'nama_sparepart' => $namasparepart,
						'massajenis' => $masajenissparepart,
						'bahan'=>$namabahan,
						'jenis_kendaraan'=>$namakendaraan,
						'berat'=>$berat,
						'status'=>$status
					);
					$this->moperator->simpansparepart($data);
					echo "<script>
								alert('Data kategori Berhasil Disimpan.');
								window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
							</script>";
					//redirect('index.php/operator/bacakategori');
				}
		}
	}
 function editdatasparepart($id) {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditsparepart($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editsparepart', $data);
    }
 function simpaneditsparepart() {
       $kategori=$this->input->post('kategori');
        $namasparepart = $this->input->post('namasparepart');
        $massajenissparepart = $this->input->post('massajenissparepart');
        $bahan=$this->input->post('namabahan');
        $berat=$this->input->post('berat');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatasparepart();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
        } 
		else 
		{
        $data = array(
           'nama_kategori'=>$kategori,
            'nama_sparepart' => $namasparepart,
            'bahan'=>$bahan,
            'berat'=>$berat,
            'massajenis' => $massajenissparepart,
            'status'=>$status
        );
        $this->moperator->simpaneditsparepart($data);
        echo "<script>
                    alert('Data Sparepart Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/inputsparepart';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
   
    function hapussparepart($id) {
        $this->moperator->hapussparepart($id);
        redirect('index.php/operator/inputsparepart');
    }
 /***********************************************************************/ //
     function inputjeniskendaraan()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/inputkendaraan');
    }
     function simpanjeniskendaraan() {
        $kendaraan = $this->input->post('kendaraan');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakendaraan();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputjeniskendaraan';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_kendaraan' => $kendaraan,
            'status'=>$status
        );
        $this->moperator->simpanjeniskendaraan($data);
        echo "<script>
                    alert('Data Jenis Kendaraan Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/inputjeniskendaraan';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
    public function editdatakendaraan($id) {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditjeniskendaraan($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editkendaraan', $data);
    }
    function hapuskendaraan($id) {
        $this->moperator->hapusjeniskendaraan($id);
        redirect('index.php/operator/inputjeniskendaraan');
    }
    function simpaneditjeniskendaraan() {
        $kendaraan = $this->input->post('kendaraan');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakendaraan();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputjeniskendaraan';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_kendaraan' => $kendaraan,
            'status'=>$status
        );
        $this->moperator->simpaneditjeniskendaraan($data);
        echo "<script>
                    alert('Data kategori Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/inputjeniskendaraan';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
/***********************************************************************/ //
function inputkaroseri()
{
    $data1['username']=$session_data=$this->session->userdata('username');
    $this->load->view('operator/head');
    $this->load->view('operator/menu',$data1);
    $this->load->view('operator/inputkaroseri');
}
function simpankaroseri() {
        $karoseri = $this->input->post('namakaroseri');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $email = $this->input->post('email');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakaroseri();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputjeniskendaraan';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_karoseri' => $karoseri,
            'alamat' => $alamat,
            'telp' => $notelp,
            'email' => $email,
            'status'=>$status
        );
        $this->moperator->simpankaroseri($data);
        echo "<script>
                    alert('Data Karoseri Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkaroseri';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
     public function editdatakaroseri($id) {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditkaroseri($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editkaroseri', $data);
    }
    function simpaneditkaroseri() {
        $karoseri = $this->input->post('namakaroseri');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $email = $this->input->post('email');
        $status="1";
        $data1['hasil'] = $this->moperator->getdatakaroseri();
		 if (!empty($data1['hasil'])) {
            echo "<script>
                    alert('Kesalahan ! Data Sudah Ada.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkaroseri';
                </script>";
        } 
		else 
		{
        $data = array(
            'nama_karoseri' => $karoseri,
            'alamat' => $alamat,
            'telp' => $notelp,
            'email' => $email,
            'status'=>$status
        );
        $this->moperator->simpaneditkaroseri($data);
        echo "<script>
                    alert('Data Karoseri Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/inputkaroseri';
                </script>";
        //redirect('index.php/operator/bacakategori');
        }
    }
     function hapuskaroseri($id) {
        $this->moperator->hapuskaroseri($id);
        redirect('index.php/operator/inputkaroseri');
    }
/***********************************************************************/ //
  function htberatkaroseri()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/formhtberat');
    }

    function proseskaroseri()
    {
        $karoseri= $this->input->post('karoseri');
        $jenis= $this->input->post('jeniskendaraan');
        $merek= $this->input->post('merek');
        $sumbu= $this->input->post('sumbu');
		$jmlorang=$this->input->post('brtorng');
		$brtkosong=$this->input->post('brtkosong');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$tlp=$this->input->post('telp');
		$tipe=$this->input->post('tipe');
        $status='1';
        $data = array(
            'karoseri' => $karoseri,
            'jenis_kendaraan' => $jenis,
            'sumbu' => $sumbu,
            'merek' => $merek,
			'beratkosong'=>$brtkosong,
			'brtorang'=>$jmlorang,
			'alamat'=>$alamat,
			'email'=>$email,
			'telp'=>$tlp,
			'tipe'=>$tipe,
            'status'=>$status
        );
        $this->moperator->simpanprosesdatakaroseri($data);
        echo "<script>
                    alert('Data Karoseri Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }

    function tambahdata($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['id']=$id;
        $data['edit'] = $this->moperator->datarakitan($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/formhitungberatkaroseri',$data);
    }
    function simpanprosesperhitungan()
    {
        $id=$this->input->post('id');
        $karoseri= $this->input->post('karoseri');
        $jenis= $this->input->post('jeniskendaraan');
        $merek= $this->input->post('merek');
        $sumbu= $this->input->post('sumbu');
        $sisi= $this->input->post('sisi');
        $jenis= $this->input->post('jenis');
        $kategori= $this->input->post('kategori');
        $namabahan= $this->input->post('namabahan');
        $jumlah= $this->input->post('jumlah');
        $pj= $this->input->post('pj');
        $lb= $this->input->post('lb');
        $tb= $this->input->post('tb');
        $ukuran=$this->input->post('ukuran');
        $status='1';
        $data = array(
            'id_karoseri' => $id,
            'kategori' => $kategori,
            'jenis' => $jenis,
            'namabahan' => $namabahan,
            'pj' => $pj,
            'lb' => $lb,
            'tb' => $tb,
            'ukuran' => $ukuran,
            'jumlah' => $jumlah,
            'status'=>$status
        );
        $this->moperator->simpanprosesdataperhitungan($data);
        echo "<script>
                    alert('Data Karoseri Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }
    function detaildataperhitungan($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['id']=$id;
        $data['edit'] = $this->moperator->datarakitan($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/detailhitungberatkaroseri',$data);
    }
	 function hitungmuatan($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['id']=$id;
        $data['edit'] = $this->moperator->datarakitan($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/formhitungmuatan',$data);
    }
   /* function edithitungberatkaroseri($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditdataberatkaroseri($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/formedithitungberatkaroseri', $data);
    }*/
    
    function editdataperhitungan($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit'] = $this->moperator->geteditdataperhitungankaroseri($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editformhtberat', $data);
    }
    function simpaneditdataperhitungan() {
        $karoseri= $this->input->post('karoseri');
        $jenis= $this->input->post('jeniskendaraan');
        $merek= $this->input->post('merek');
        $sumbu= $this->input->post('sumbu');
		$jmlorang=$this->input->post('brtorng');
		$brtkosong=$this->input->post('brtkosong');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');
		$tlp=$this->input->post('telp');
		$tipe=$this->input->post('tipe');
        $status='1';
        $data =  $data = array(
            'karoseri' => $karoseri,
            'jenis_kendaraan' => $jenis,
            'sumbu' => $sumbu,
            'merek' => $merek,
			'beratkosong'=>$brtkosong,
			'brtorang'=>$jmlorang,
			'alamat'=>$alamat,
			'email'=>$email,
			'telp'=>$tlp,
			'tipe'=>$tipe,
            'status'=>$status
        );
        $this->moperator->simpaneditdataperhitungan($data);
        echo "<script>
                    alert('Data Karoseri Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
        //redirect('index.php/operator/bacakategori');
    }
    function hapusperhitungan($id)
    {
        $this->moperator->hapusperhitungan($id);
        redirect('index.php/operator/htberatkaroseri');
    }
    function edithitungberatkaroseri($id)
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        $data['edit1'] = $this->moperator->geteditdatahitungberatkaroseri1($id);
        $data['id']=$id;
        $data['edit'] = $this->moperator->datarakitan($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/editformhitungberatkaroseri', $data);
    }
    function simpaneditprosesperhitungan()
    {
        $id=$this->input->post('id');
        $karoseri= $this->input->post('karoseri');
        $jenis= $this->input->post('jeniskendaraan');
        $merek= $this->input->post('merek');
        $dimensi= $this->input->post('dim');
        $sisi= $this->input->post('sisi');
        $jenis= $this->input->post('jenis');
        $kategori= $this->input->post('kategori');
        $namabahan= $this->input->post('namabahan');
        $jumlah= $this->input->post('jumlah');
        $pj= $this->input->post('pj');
        $lb= $this->input->post('lb');
        $tb= $this->input->post('tb');
        $ukuran=$this->input->post('ukuran');
        $status='1';
        $data = array(
            'kategori' => $kategori,
            'jenis' => $jenis,
            'namabahan' => $namabahan,
            'pj' => $pj,
            'lb' => $lb,
            'tb' => $tb,
            'ukuran' => $ukuran,
            'jumlah' => $jumlah,
            'status'=>$status,
            'posisi'=>$sisi,
            'dimensi'=>$dimensi
        );
        $this->moperator->simpaneditprosesperhitungan($data);
        echo "<script>
                    alert('Data Perhitungan Berhasil Diperbaharui.');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }
    function panduan()
    {
        $data1['username'] = $session_data = $this->session->userdata('username');
        //$data['edit'] = $this->moperator->geteditdataperhitungankaroseri($id);
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/panduan');
    }
    function jenismuatan()
    {
     $data1['username'] = $session_data = $this->session->userdata('username');
        $this->load->view('operator/head');
        $this->load->view('operator/menu', $data1);
        $this->load->view('operator/jenismuatan');
    }
      function simpanjenismuatan()
    {
        $jenis= $this->input->post('jenis');
        $berat= $this->input->post('berat');
        $volume=$this->input->post('volume');
        $status='1';
        $data = array(
            'jenis' => $jenis,
            'berat' => $berat,
            'volume'=>$volume,
            'status'=>$status
        );
        $this->moperator->simpanjenismuatan($data);
        echo "<script>
                    alert('Data Muatan Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/jenismuatan';
                </script>";
    }
      function simpanhitungmuatan()
    {
        $id=$this->input->post('id');
        $karoseri= $this->input->post('karoseri');
        $jenis= $this->input->post('jeniskendaraan');
        $merek= $this->input->post('merek');
        $sumbu= $this->input->post('sumbu');
        $jenismuatan= $this->input->post('jenismuatan');
        $pj= $this->input->post('pj');
        $lb= $this->input->post('lb');
        $tb= $this->input->post('tb');
        $h=$this->input->post('h');
        $s=$this->input->post('s');
        $status='1';
        $data = array(
            'id_karoseri'=>$id,
            'karoseri' => $karoseri,
            'jeniskendaraan' => $jenis,
            'jenismuatan' => $jenismuatan,
            'sumbu'=>$sumbu,
            'merek'=>$merek,
            'pj' => $pj,
            'lb' => $lb,
            'tb' => $tb,
            'h' => $h,
            's' => $s
        );
        $this->moperator->simpanhitungperhitungan($data);
        echo "<script>
                    alert('Data Perhitungan Berhasil Disimpan.');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }
    function validasiberatkaroseri ()
    {
        $id=$this->input->post('id');
        $beratkaroseri=$this->input->post('brtkaroseri');
        $status='1';
        $data=array(
            'kode'=>$id,
            'beratkaroseri'=>$beratkaroseri,
            'status'=>$status
        );
        $this->moperator->simpanvalidasiberatkaroseri($data);
        echo "<script>
                    alert('Data Telah divalidasi !');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }
    function validasiberatmuatan ()
    {
        $id=$this->input->post('id');
        $brtmuatan=$this->input->post('brtmuatan');
        $volmuatan=$this->input->post('volmuatan');
        $status='1';
        $data=array(
            'kode'=>$id,
            'volume'=>$volmuatan,
            'berat'=>$brtmuatan,
            'status'=>$status
        );
        $this->moperator->simpanvalidasiberatmuatan($data);
        echo "<script>
                    alert('Data Telah divalidasi !');
                    window.location.href = '" . base_url() . "index.php/operator/htberatkaroseri';
                </script>";
    }
    function keluar() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/'));
    }
}

