<?php


class User_Model extends CI_Model
{
    /**
     * Return all users
     * @return array
     */
    public function getAll() {
        return $this->db->get('user')->result_array();
    }

    /**
     * Save user
     * @param $postData
     * @return mixed
     */
    public function save($postData) {

        $insert = $this->db->insert('user', $postData);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return $insert;
        }
    }


}