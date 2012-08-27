<?php

class Quiz extends My_Model
{
    protected $tableName = 'tblquiz';
    protected $primaryKey = 'QuizID';

    public function getAll()
    {
        return $this->findAll();
    }

    public function delete(array $quizId)
    {
        return $this->remove($quizId);
    }
}