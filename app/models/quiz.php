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

    public function getDetail($quizId)
    {
        $result = $this->find(array($this->primaryKey => $quizId));
        if (!empty($result)) {
            $dateParts = explode('-', substr($result['ExpiryDate'], 0, strlen('0000-00-00')));
            $result['ExpiryDate'] = "{$dateParts[2]}-{$dateParts[1]}-{$dateParts[0]}";
            $result['ExpiryTime'] = substr($result['ExpiryTime'], strlen('0000-00-00 '), 5);
        }

        return $result;
    }

    public function save(array $data)
    {
        $data = $this->convertDateIntoMySQL($data);
        return $this->insert($data);
    }

    public function modify(array $data)
    {
        $data = $this->convertDateIntoMySQL($data);
        return $this->update($data, $data[$this->primaryKey]);
    }

    public function delete($quizId)
    {
        return $this->remove($quizId);
    }

    private function convertDateIntoMySQL($data)
    {
        $dateParts = explode('-', $data['ExpiryDate']);
        $data['ExpiryDate'] = "{$dateParts[2]}-{$dateParts[1]}-{$dateParts[0]}";
        $data['ExpiryTime'] = "{$data['ExpiryDate']} {$data['ExpiryTime']}:00";
        return $data;
    }
}