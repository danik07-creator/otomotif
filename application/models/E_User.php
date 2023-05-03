<?php
class E_User extends CI_Model{
  
	function add_user($tabelname,$data){
        $res =$this->db->insert($tabelname,$data);
        return $res;
    }
    function list_mobil(){
      
        $this->db->select('*');
        $this->db->from('mobil');
        $this->db->where('delete_mobil',0);
        $query = $this->db->get();
        return $query->result_array();
    } 
    public function update_otomotif($namatabel,$dataprofil,$id_produk){
        $this->db->where('id_produk',$id_produk);
        $res = $this->db->update($namatabel,$dataprofil);
        return $res;
    }
    
    function pilih_mobil($id_produk){
        $this->db->where('id_produk',$id_produk);
        $query = $this->db->get('mobil');
        return $query;
    }
   
    
        
    
        
    }  
?>