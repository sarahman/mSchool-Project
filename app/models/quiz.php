<?php

class Quiz extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblquiz', 'QuizID');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function save(array $data)
    {
        return $this->insert($data);
    }

    public function delete(array $quizId)
    {
        return $this->remove($quizId);
    }
}