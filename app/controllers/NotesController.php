<?php

/**
 * Notes Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class NotesController extends BaseController
{
    protected function initialize()
    {
        if (!$this->session->userdata('username')) {
            redirect('users/login');
        }
    }

    public function index()
    {
        $this->load->model('note');
        $this->data['username'] = $this->session->userdata('name');
        $this->layout->view('notes/index', $this->data);
    }

    public function get()
    {
        $this->load->model('note');
        $this->data['notes'] = $this->note->getAllByDate();
        $this->load->view('notes/get', $this->data);
    }

    public function view()
    {
        $data = $this->uri->uri_to_assoc();

        if (empty ($data['id'])) {
            return;
        }

        $this->load->model('note');
        $this->data['note'] = $this->note->getDetail($data['id']);
        $this->load->view('notes/view', $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->setRulesForNoteAdd();

        if (!empty($_POST)) {
            if ($this->form_validation->run()) {

                $this->load->model('note');
                $result = $this->note->save($_POST);

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

        $this->load->view('notes/add', $this->data);
    }

    public function update()
    {
        $this->load->model('note');

        $this->load->library('form_validation');
        $this->form_validation->setRulesForNoteUpdate();

        if (!empty ($_POST)) {

            if ($this->form_validation->run()) {

                $result = $this->note->modify($_POST);

                if (empty($result)) {

                    $this->data['isUpdated'] = false;
                    $this->data['errorMsg'] = 'Something went wrong! Please check again.';
                    $this->data['note'] = $_POST;

                } else {
                    $this->data['isUpdated'] = true;
                }

            } else {
                $this->data['isUpdated'] = false;
                $this->data['errorMsg'] = 'Check the following errors.';
                $this->data['note'] = $_POST;
            }
        } else {
            $data = $this->uri->uri_to_assoc();

            if (empty ($data['id'])) {
                $this->data['errorMsg'] = 'Check the following errors.';
            } else {
                $this->data['note'] = $this->note->getDetail($data['id']);
            }

            $this->data['isUpdated'] = false;
        }

        $this->load->view('notes/update', $this->data);
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
            echo '<h2>Note data is not found. Please check.</h2>';

        } else {
            $this->load->model('note');

            $this->note->delete($data['id']);
            echo "<h2>Deleted Successfully</h2>";
        }
    }
}
