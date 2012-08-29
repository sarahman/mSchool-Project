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

    public function confirmDelete()
    {
        echo "<span style='text-align:center'><br><h2>Are you sure to delete this record?</h2><br><br>";
        echo "<a href='javascript:delRec()' style='padding-left:100px'>Yes</a>   <a href='' style='padding-left:100px'>No</a></span>";
    }

    public function delete()
    {
        $this->load->model('quiz');
        $this->load->model('question');
        $quizID = $this->uri->segment(3);
        $this->quiz->delete($quizID);
        $this->question->deleteByQuiz($quizID);
        echo "<h2>Deleted Successfully</h2>";
    }
}
