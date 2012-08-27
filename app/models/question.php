<?php

class Question extends My_Model
{
    protected $tableName = 'tblquestions';
    protected $primaryKey = 'QuesID';

    public function getByQuizId($quizId)
    {
        return $this->findAllBy('QuizID', $quizId);
    }

    public function deleteByQuiz($quizId)
    {
        return $this->removeByField(array('QuizID' => $quizId, 'QuizID'));
    }
}