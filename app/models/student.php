<?php

class Student extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblstudents', 'StudentID');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getDetail($studentId)
    {
        $result = $this->find(array($this->primaryKey => $studentId));
        if (!empty($result['DOB'])) {
            $result['DOB'] = $this->convertDateIntoHuman($result['DOB']);
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
        $dobParts = explode('-', $data['DOB']);
        $data['DOB'] = "{$dobParts[2]}-{$dobParts[1]}-{$dobParts[0]}";
        return $data;
    }

    private function convertDateIntoHuman($date)
    {
        $dateParts = explode('-', substr($date, 0, strlen('0000-00-00')));
        return "{$dateParts[2]}-{$dateParts[1]}-{$dateParts[0]}";
    }
}