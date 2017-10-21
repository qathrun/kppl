<?php 
 
class Fungsi_model extends CI_Model{
	function ambil_data(){
		return $this->db->get('wisata');
	}
	
	function read_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	} //simpan data ke db
	
     function destroy($where, $tabel){
         $this->db->where($where)
                 ->delete($tabel);
     }

}
?>