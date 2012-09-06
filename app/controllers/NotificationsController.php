<?php

/**
 * Notifications Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class NotificationsController extends BaseController
{
    protected function initialize()
    {
        if (!$this->session->userdata('username')) {
            redirect('users/login');
        }
    }

    public function index()
    {
        $this->data['username'] = $this->session->userdata('name');
        $this->layout->view('notifications/index', $this->data);
    }

    public function get()
    {
        $this->load->model('course');
        $this->data['courses'] = $this->course->getAll();

        $this->load->view('notifications/get', $this->data);
    }

    public function view()
    {
        $this->load->view('notifications/view', $this->data);
    }
}