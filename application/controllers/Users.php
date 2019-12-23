<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model','UM',true);
    }

    /**
     * View index
     */
    public function index()
    {
        $this->load->view('users.php');
    }

    /**
     * Save user
     */
    public function save()
    {
        // POST data
        $postData = $this->input->post();

        if (validate($postData)) {
            $response = $this->UM->save($postData);
            if ($response) {
                echo json_encode(1);
            }
        }

        echo json_encode(0);

    }
}