<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

include_once APPPATH . "controllers/BaseController.php";
class UsersController extends BaseController
{
    public function index()
    {
        redirect('users/login');
    }

    public function login()
    {
        if ($this->session->userdata('username')) {
            redirect('home');
        }

        $this->load->model('user');

        $this->load->library('form_validation');
        $this->form_validation->setRulesForSignIn();

        if (!empty ($_POST)) {

            if ($this->form_validation->run()) {

                $this->load->model('user');
                $result = $this->user->validateUser($_POST);

                if (empty($result)) {
                    $this->data['isError'] = true;
                } else {

                    $this->session->set_userdata('username', $_POST['username']);
                    $this->session->set_userdata('name', $result['Name']);
                    $this->session->set_userdata('userType', ADMIN_TYPE);
                    $this->redirectForSuccess('home', 'You have successfully logged in.');
                }

            } else {
                $this->data['isError'] = true;
            }
        }

        $this->load->view('users/login', $this->data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('users/login');
    }

    protected function ensureLogin()
    {
        if ($this->session->userdata('userType')) {
            if ($this->uri->uri_string() === 'users/login') {
                redirect('home');
            }
        } elseif ($this->uri->uri_string() !== 'users/login') {
            redirect('users/login');
        }
    }
}