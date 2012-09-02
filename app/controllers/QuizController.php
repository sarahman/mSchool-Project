<?php

/**
 * Quiz Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class QuizController extends BaseController
{
    protected function initialize()
    {
        if (!$this->session->userdata('username')) {
            return false;
        }
    }

    public function get()
    {
        $this->load->model('quiz');
        $this->data['quiz'] = $this->quiz->getAll();
        $this->load->view('quiz/get', $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->setRulesForQuizAdd();

        if (!empty($_POST)) {
            if ($this->form_validation->run()) {

                $this->load->model('quiz');
                $result = $this->quiz->save($_POST);

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

        $this->load->view('quiz/add', $this->data);
    }

    public function update()
    {
        $this->load->model('quiz');

        $this->load->library('form_validation');
        $this->form_validation->setRulesForQuizUpdate();

        if (!empty ($_POST)) {

            if ($this->form_validation->run()) {

                $result = $this->quiz->modify($_POST);

                if (empty($result)) {

                    $this->data['isUpdated'] = false;
                    $this->data['errorMsg'] = 'Something went wrong! Please check again.';
                    $this->data['quiz'] = $_POST;

                } else {
                    $this->data['isUpdated'] = true;
                }

            } else {
                $this->data['isUpdated'] = false;
                $this->data['errorMsg'] = 'Check the following errors.';
                $this->data['quiz'] = $_POST;
            }
        } else {
            $data = $this->uri->uri_to_assoc();

            if (empty ($data['id'])) {
                $this->data['errorMsg'] = 'Check the following errors.';
            } else {
                $this->data['quiz'] = $this->quiz->getDetail($data['id']);
            }

            $this->data['isUpdated'] = false;
        }

        $this->load->view('quiz/update', $this->data);
    }

    public function confirmDelete()
    {
        echo "<span style='text-align:center'><br><h2>Are you sure to delete this record?</h2><br><br>";
        echo "<a href='javascript:delRec()' style='padding-left:100px'>Yes</a>   <a href='' style='padding-left:100px'>No</a></span>";
    }

    public function delete()
    {
        $data = $this->uri->uri_to_assoc();
echo '<h2>Quiz data is not found. Please check.</h2>';
        return;
        if (empty ($data['id'])) {
            echo 'Quiz data is not found. Please check.';
        } else {
            $this->load->model('quiz');
            $this->load->model('question');

            $this->quiz->delete($data['id']);
            $this->question->deleteByQuiz($data['id']);
            echo "<h2>Deleted Successfully</h2>";
        }
    }
}
