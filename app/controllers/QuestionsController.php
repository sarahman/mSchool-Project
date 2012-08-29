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

    public function add()
    {
        require_once("../init.php");
        require_once("../lib/Models/Quiz.php");

        if (isset($_GET["q"])) {
            switch ($_GET["q"])
            {
                case "getQuiz":
                    break;

                case "delete":
                    $quizID = $_GET['quizID'];
                    echo "<span style='text-align:center'><br><h2>Are you sure to delete this record?</h2><br><br>";
                    echo "<a href='javascript:delRec()' style='padding-left:100px'>Yes</a>   <a href='' style='padding-left:100px'>No</a></span>";
                    break;
                case "del":
                    $quizID = $_GET['quizID'];
                    $quiz = new Quiz();
                    $quiz = Quiz::find_by_id($quizID);
                    $quiz->delete();
                    $db->query("Delete from tblQuestions where QuizID='" . $quizID . "'");
                    echo "<h2>Deleted Successfully</h2>";
                    break;
            }
            exit;

        }
        else
        {
            if ($_POST) {
                extract($_POST);
                $quiz = new Quiz();
                $quiz->Title = $Title;
                $quiz->Description = $Description;
                $quiz->ExpiryDate = to_datetime(strtotime($ExpiryDate));
                $quiz->ExpiryTime = to_datetime(strtotime($ExpiryTime));
                $quiz->LecturerID = $LecturerID;
                $quiz->CategoryID = $CategoryID;
                $quiz->create();
                echo "Record Added";
                exit;
            }
            else
            {
                ?>

            <script type="text/javascript" src="js/jquery.ui.core.js"></script>
            <script type="text/javascript" src="js/jquery.ui.timepicker-0.0.6.js"></script>
            <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
            <link href='css/ui-lightness/jquery-ui-1.8.7.custom.css' rel='stylesheet' type='text/css'/>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#ExpiryTime').timepicker();
                    $("#ExpiryDate").datepicker({ dateFormat:'d-m-yy' });

                });
            </script>


            <script src='js/navform.js' type='text/javascript'></script>


            <?php
            }
        }
    }
}
