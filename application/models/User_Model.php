<?php


class User_Model extends CI_Model
{

    public function getAll() {
        return $this->db->get('user')->result_array();
    }

    public function save($postData) {

        $insert = $this->db->insert('user', $postData);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return $insert;
        }
    }
}