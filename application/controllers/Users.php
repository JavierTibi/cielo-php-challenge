<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model','UM',true);
        $this->load->library('form_validation');
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

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('date_of_birth', 'Date of birth', 'required');
        $this->form_validation->set_rules('favorite_color', 'Favorite color', 'trim|required|in_list[blue,red,green,orange,black,white]');

        if($this->form_validation->run())
        {
            $response = $this->UM->save($postData);
            if ($response) {
                $array = array(
                    'success' => '<div style="margin-top: 10px;" class="alert alert-success">User saved successfully!</div>'
                );
            }
        }
        else
        {
            $array = array(
                'error'   => true,
                'name_error' => form_error('name'),
                'email_error' => form_error('email'),
                'dob_error' => form_error('date_of_birth'),
                'color_error' => form_error('favorite_color')
            );
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($array));

    }

}