<?php

/**
 * Events Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class EventsController extends BaseController
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
        $this->layout->view('events/index', $this->data);
    }

    public function get()
    {
        $this->load->model('event');
        $this->data['events'] = $this->event->getAll();
        $this->load->view('events/get', $this->data);
    }

    public function view()
    {
        $data = $this->uri->uri_to_assoc();

        if (empty ($data['id'])) {
            return;
        }

        $this->load->model('event');
        $this->data['event'] = $this->event->getDetail($data['id']);
        $this->load->view('events/view', $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->setRulesForEventAdd();

        if (!empty($_POST)) {
            if ($this->form_validation->run()) {

                $this->load->model('event');
                $_POST['CreatorID'] = $this->session->userdata('userId');
                $result = $this->event->save($_POST);

                if (empty($result)) {
                    $this->data['isAdded'] = false;
                    $this->data['errorMsg'] = 'Something went wrong! Please check again.';
                } else {
                    $this->data['isAdded'] = true;
                }

            } else {
                $this->data['isAdded'] = false;
                $this->data['errorMsg'] = 'Check the following errors.';
            }
        }

        $this->load->view('events/add', $this->data);
    }

    public function update()
    {
        $this->load->model('event');

        $this->load->library('form_validation');
        $this->form_validation->setRulesForEventUpdate();

        if (!empty ($_POST)) {

            if ($this->form_validation->run()) {

                $result = $this->event->modify($_POST);

                if (empty($result)) {

                    $this->data['isUpdated'] = false;
                    $this->data['errorMsg'] = 'Something went wrong! Please check again.';
                    $this->data['event'] = $_POST;

                } else {
                    $this->data['isUpdated'] = true;
                }

            } else {
                $this->data['isUpdated'] = false;
                $this->data['errorMsg'] = 'Check the following errors.';
                $this->data['event'] = $_POST;
            }
        } else {
            $data = $this->uri->uri_to_assoc();

            if (empty ($data['id'])) {
                $this->data['errorMsg'] = 'Check the following errors.';
            } else {
                $this->data['event'] = $this->event->getDetail($data['id']);
            }

            $this->data['isUpdated'] = false;
        }

        $this->load->view('events/update', $this->data);
    }

    public function confirmDelete()
    {
        echo "<span style='text-align:center'><br><h2>Are you sure to delete this record?</h2><br><br>";
        echo "<a href='javascript:delRec()' style='padding-left:100px'>Yes</a>";
        echo "<a href='' style='padding-left:100px'>No</a></span>";
    }

    public function delete()
    {
        $data = $this->uri->uri_to_assoc();
        if (empty ($data['id'])) {
            echo '<h2>Event data is not found. Please check.</h2>';

        } else {
            $this->load->model('event');

            $this->event->delete($data['id']);
            echo "<h2>Deleted Successfully</h2>";
        }
    }
}
