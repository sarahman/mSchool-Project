<?php

/**
 * Lectures Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class LecturesController extends BaseController
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
        $this->layout->view('lectures/index', $this->data);
    }

    public function get()
    {
        $this->load->model('week');
        $this->data['weeks'] = $this->week->getAll();
        $this->load->view('lectures/get', $this->data);
    }

    public function getByWeek()
    {
        $data = $this->uri->uri_to_assoc();
        $this->load->model('attachment');
        $this->data['attachments'] = $this->attachment->getByWeek($data['id']);
        $this->load->view('lectures/get-by-week', $this->data);
    }

    public function view()
    {
        $data = $this->uri->uri_to_assoc();
        $this->load->model('attachment');
        $this->data['attachment'] = $this->attachment->getDetail($data['id']);
        $this->load->view('lectures/view', $this->data);
    }
}