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
