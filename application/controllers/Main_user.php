<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_user extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('E_User');
		error_reporting(0);
	}
	
    public function homebase(){
        $data['mobil'] = $this->E_User->list_mobil();
        $this->load->view('v_homebase',$data);
    }
    public function tambahotomotif(){
        $this->load->view('v_tambahotomotif',$data);
    }

    public function tambah_otomotif(){
      
         $merk_produk =$this->input->post('merk_produk');
         $jenis_produk =$this->input->post('jenis_produk');
         $jumlah_stok =$this->input->post('jumlah_stok');
         $harga =$this->input->post('harga');
         $keterangan =$this->input->post('keterangan');
 
        
             //masukkan ke database
    
              $cek = $this->E_User->add_user('mobil',array ("merk_produk" => $merk_produk,"jenis_produk" => $jenis_produk,"jumlah_stok" => $jumlah_stok,"harga" => $harga, "keterangan" => $keterangan));
                  
             
            
             if ($cek >= 1){
                 ?> <script language="JavaScript">alert('Berhasil Ditambahkan');
                     document.location='<?php echo site_url('Main_user/homebase');?>'</script><?php
                 //redirect();
             }
             else {
                 ?> <script language="JavaScript">alert('Gagal Ditambahkan');
                     document.location='<?php echo site_url();?>'</script><?php
             }
         }
         public function deleteotomotif($id_produk) {
            $cek =  $this->E_User->update_otomotif('mobil',array ("delete_mobil" => 1),$id_produk);
                   
               if ($cek >= 1){
                   ?> <script language="JavaScript">alert('Data Dihapus');
                       document.location='<?php echo site_url('Main_user/homebase');?>'</script><?php
                   //redirect();
               }
               else {
                   ?> <script language="JavaScript">alert('Gagal Dihapus');
                       document.location='<?php echo site_url();?>'</script><?php
               }
   }  
    public function editotomotif($id_produk){
    $data['mobildata'] = $this->E_User->pilih_mobil($id_produk)->row();
    $this->load->view('v_editotomotif',$data);
    }
    public function edit_otomotif($id_produk){
        $id_produk = $id_produk;
        $merk_produk =$this->input->post('merk_produk');
        $jenis_produk =$this->input->post('jenis_produk');
        $jumlah_stok =$this->input->post('jumlah_stok');
        $harga =$this->input->post('harga');
        $keterangan =$this->input->post('keterangan');

       
            //masukkan ke database
   
             $cek = $this->E_User->update_otomotif('mobil',array ("merk_produk" => $merk_produk,"jenis_produk" => $jenis_produk,"jumlah_stok" => $jumlah_stok,"harga" => $harga, "keterangan" => $keterangan),$id_produk);
                 
            
           
            if ($cek >= 1){
                ?> <script language="JavaScript">alert('Berhasil Di Edit');
                    document.location='<?php echo site_url('Main_user/homebase');?>'</script><?php
                //redirect();
            }
            else {
                ?> <script language="JavaScript">alert('Gagal  Di Edit');
                    document.location='<?php echo site_url();?>'</script><?php
            }
        }
    
}
?>