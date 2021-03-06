<?php

if( ! defined('BASEPATH')) exit('No direct script access allowed');

class kniha_model extends CI_Model {
 public function get_page($id){

        $sql = "SELECT * FROM knihy WHERE obdobi_idobdobi = ?";
        $result = $this->db->query($sql, array($id));

       return $result->result();
    }
    public function get_obal($id){
        $sql = "SELECT * FROM knihy WHERE id_knihy = ?";
        $result = $this->db->query($sql, array($id));
        return $result->result();

    }

    public function get_menu_kategorie(){
        
        $this->db->select('categorie, idmenu');
		$this->db->from('menu');
        $this->db->order_by('idmenu');
        $query = $this->db->get();
        return $query->result();
    }
}