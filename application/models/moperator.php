<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class moperator extends CI_Model {
/**********************************************************************************/
    function getidentitasuser($id) {
        $q = "SELECT * FROM  tb_user WHERE username='$id'";
        $query = $this->db->query($q);
        return $query->row();
    }

    function simpandatauser($data) {
        $this->db->insert('tb_user', $data);
    }
    function getDatauser() {
        $this->db->where('status', '0');
        $this->db->order_by('id_user', 'ASC');
        $data = $this->db->get('tb_user');
        return $data->result();
    }
	function getDatauserxx() {
		$username = $this->input->post('username');
        $q="SELECT * FROM  tb_user where username='$username'";
        $query=$this->db->query($q);
        return $query->row();
    }

function edituser($id) {
        $q = "SELECT * FROM  tb_user WHERE id_user='$id'";
        $query = $this->db->query($q);
        return $query->row();
    }

   function simpaneditdatauser($id) {
        $status = '1';
        $q = "update tb_user set status='$status'  WHERE id_user='$id'";
        $query = $this->db->query($q);
    }

 function simpaneditdatauser1($data) {
        $id = $this->input->post('id');
        $this->db->where('id_user', $id);
        $this->db->update('tb_user', $data);
    }

function simpanpengaturanakun($data) {
        $id = $this->input->post('id');
        $this->db->where('username', $id);
        $this->db->update('tb_user', $data);
    }
/**********************************************************************************/
function getdatakategori()
    {
        $kategori = $this->input->post('kategori');
        $q="SELECT * FROM  tb_kategori where nama_kategori='$kategori' ";
        $query=$this->db->query($q);
        return $query->row();
    }
function simpankategori($data) {
        $this->db->insert('tb_kategori', $data);
    }
function geteditkategori($id)
    {
        $q="SELECT * FROM  tb_kategori WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }
function simpaneditkategori($data)
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
     $this->db->update('tb_kategori', $data);
	}
function hapuskategori($id)
	{
	    $status='0';
	    $q="update tb_kategori set status='0'  WHERE id='$id'";
        $query=$this->db->query($q);
	}
/**********************************************************************************/	

function simpansparepart($data) {
        $this->db->insert('tb_sparepart', $data);
    }
function getdatasparepart()
    {
        $kategori = $this->input->post('kategori');
        $namasparepart = $this->input->post('namasparepart');
		$namabahan = $this->input->post('namabahan');
		$masajenissparepart = $this->input->post('masajenissparepart');
		$berat = $this->input->post('berat');
        
        $q="SELECT * FROM  tb_sparepart where nama_kategori='$kategori' and nama_sparepart='$namasparepart' and bahan='$namabahan' and berat='$berat' and massajenis='masajenissparepart' and status='1'";
        $query=$this->db->query($q);
        return $query->row();
    }
function geteditsparepart($id)
    {
        $q="SELECT * FROM  tb_sparepart WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }
function simpaneditsparepart($data)
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('tb_sparepart', $data);
	}
function hapussparepart($id)
	{
	    $status='0';
	    $q="update tb_sparepart set status='0'  WHERE id='$id'";
        $query=$this->db->query($q);
	}
/**********************************************************************************/	
function simpanjeniskendaraan($data) {
        $this->db->insert('tb_kendaraan', $data);
    }
/**********************************************************************************/	 
function simpankaroseri($data) {
        $this->db->insert('tb_karoseri', $data);
    }
function getdatakaroseri()
    {
        $karoseri = $this->input->post('namakaroseri');
        $namapimpinan = $this->input->post('namapimpinan');
        $alamat = $this->input->post('alamat');
        $notelp = $this->input->post('notelp');
        $email = $this->input->post('email');
        $q="SELECT * FROM  tb_karoseri where nama_karoseri='$karoseri' and alamat ='$alamat' and pemilik='$namapimpinan' and telp='$notelp' and email='$email' and status='1'";
        $query=$this->db->query($q);
        return $query->row();
    }
function geteditkaroseri($id)
    {
        $q="SELECT * FROM  tb_karoseri WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }
function simpaneditkaroseri($data)
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
     $this->db->update('tb_karoseri', $data);
	}
function hapuskaroseri($id)
	{
	    $status='0';
	    $q="update tb_karoseri set status='0'  WHERE id='$id'";
        $query=$this->db->query($q);
	}
/**********************************************************************************/	
function getdatakendaraan()
    {
        $kendaraan = $this->input->post('kendaraan');
        $q="SELECT * FROM  tb_kendaraan where nama_kendaraan='$kendaraan' and status='1'";
        $query=$this->db->query($q);
        return $query->row();
    }
function geteditjeniskendaraan($id)
    {
        $q="SELECT * FROM  tb_kendaraan WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
    }
function simpaneditjeniskendaraan($data)
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
     $this->db->update('tb_kendaraan', $data);
	}
function hapusjeniskendaraan($id)
	{
	    $status='0';
	    $q="update tb_kendaraan set status='0'  WHERE id='$id'";
        $query=$this->db->query($q);
	}	
/**********************************************************************************/	
function datarakitan($id)
{
        $q="SELECT * FROM  tb_datarakitan WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
}
function getdetailDataperhitungan($id)
	{
		$query = $this->db->query("SELECT * FROM view_perhitunganberat where id='$id'");
        return ($query->num_rows() > 0)? $query->result():FALSE;
	}

function simpanprosesdatakaroseri($data) {
        $this->db->insert('tb_datarakitan', $data);
    }
function simpanprosesdataperhitungan($data) {
        $this->db->insert('tb_databeratkaroseri', $data);
    }
function simpanproses($data) {
        $this->db->insert('tb_proses', $data);
    }
function geteditdataberatkaroseri($id)
{
        $q="SELECT * FROM  tb_datarakitan WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
}
function geteditdataperhitungankaroseri($id)
{
        $q="SELECT * FROM  tb_datarakitan WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
}
function simpaneditdataperhitungan($data)
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('tb_datarakitan', $data);
	}
function simpaneditprosesperhitungan($data)
{
    $id=$this->input->post('id');
		$this->db->where('id', $id);
		$this->db->update('tb_databeratkaroseri', $data);
}
function hapusperhitungan($id)
	{
	    $status='0';
	    $q="update tb_datarakitan set status='0'  WHERE id='$id'";
        $query=$this->db->query($q);
    }
function geteditdatahitungberatkaroseri1($id)
{
        $q="SELECT * FROM  tb_databeratkaroseri WHERE id='$id'";
        $query=$this->db->query($q);
        return $query->row();
}
function simpanjenismuatan($data) 
{
        $this->db->insert('tb_muatan', $data);
}
function simpanhitungperhitungan($data)
{
        $this->db->insert('tb_perhitunganmuatan', $data);
}  
function simpanvalidasiberatkaroseri($data)
{
    $this->db->insert('tb_valberatkaroseri', $data);
}
function simpanvalidasiberatmuatan($data)
{
    $this->db->insert('tb_valberatmuatan', $data);
}
}
?>