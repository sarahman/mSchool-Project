<?php

class Question extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblquestions', 'QuesID');
    }

    public function getByQuizId($quizId)
    {
        return $this->findAllBy('QuizID', $quizId);
    }

    public function getDetail($questionId)
    {
        return $this->find(array($this->primaryKey => $questionId));
    }

    public function modify(array $data)
    {
        return $this->update($data, $data[$this->primaryKey]);
    }

    public function deleteByQuiz($quizId)
    {
        return $this->removeByField(array('QuizID' => $quizId, 'QuizID'));
    }
}