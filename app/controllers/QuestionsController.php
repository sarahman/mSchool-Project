<?php

/**
 * Questions Controller
 */

include_once APPPATH . 'Controllers/BaseController.php';
class QuestionsController extends BaseController
{
    protected function initialize()
    {
        if (!$this->session->userdata('username')) {
            return false;
        }
    }

    public function getByQuiz()
    {
        if (!($quizId = $this->uri->segment(3))) {
            return;
        }

        $this->load->model('question');
        $this->data['questions'] = $this->question->getByQuizId($quizId);
        $this->load->view('questions/get-by-quiz', $this->data);
    }

    public function view()
    {
        $data = $this->uri->uri_to_assoc();

        if (empty ($data['id'])) {
            return;
        }

        $this->load->model('question');
        $this->data['question'] = $this->question->getDetail($data['id']);
        $this->load->view('questions/view', $this->data);
    }

    public function add()
    {
        $this->load->library('form_validation');
        $this->form_validation->setRulesForQuestionAdd();

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

        $this->load->view('questions/add', $this->data);
    }

    public function update()
    {
        $this->load->model('question');

        $this->load->library('form_validation');
        $this->form_validation->setRulesForQuestionUpdate();

        if (!empty ($_POST)) {

            if ($this->form_validation->run()) {

                $result = $this->question->modify($_POST);

                if (empty($result)) {

                    $this->data['isUpdated'] = false;
                    $this->data['errorMsg'] = 'Something went wrong! Please check again.';
                    $this->data['question'] = $_POST;

                } else {
                    $this->data['isUpdated'] = true;
                }

            } else {
                $this->data['isUpdated'] = false;
                $this->data['errorMsg'] = 'Check the following errors.';
                $this->data['question'] = $_POST;
            }
        } else {
            $data = $this->uri->uri_to_assoc();

            if (empty ($data['id'])) {
                $this->data['errorMsg'] = 'Check the following errors.';
            } else {
                $this->data['question'] = $this->question->getDetail($data['id']);
            }

            $this->data['isUpdated'] = false;
        }

        $this->load->view('questions/update', $this->data);
    }

    public function confirmDelete()
    {
        $quesID = $this->uri->segment(3);
        echo "<span style='text-align:center'><br><h2>Are you sure to delete this record?</h2><br><br>";
        echo "<a href='javascript:delQuestion($quesID)' style='padding-left:100px'>Yes</a>   <a href='' style='padding-left:100px'>No</a></span>";
    }

    public function delete()
    {
        $this->load->model('question');
        $quesID = $this->uri->segment(3);
        $this->quiz->delete($quesID);
        echo "<h2>Deleted Successfully</h2>";
    }
}