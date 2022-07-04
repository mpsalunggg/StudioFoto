<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }
    
    public function delete($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('user_menu', $data);
    }
    
    public function deleteSub($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('user_sub_menu', $data);
    }

    public function hapus_data($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('cetak_foto', $data);
    }

    public function hapus_jasa($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('jasa_foto', $data);
    }
        
    public function get_keyword($keyword){
        $this->db->select('*');
        $this->db->from('jasa_foto');
        $this->db->like('nama', $keyword);
        $this->db->or_like('paket', $keyword);
        return $this->db->get()->result();
    }
        

}