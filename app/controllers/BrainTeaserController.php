<?php

/**
 * Brain Teaser Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class BrainTeaserController extends BaseController
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
        $this->layout->view('brain-teaser/index', $this->data);
    }
}
