<?php

class Event extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblevents', 'EventID');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getDetail($noteId)
    {
        $result = $this->find(array($this->primaryKey => $noteId));
        if (!empty($result)) {
            $result['EndDate'] = $this->convertDateIntoHuman($result['EndDate']);
            $result['StartDate'] = $this->convertDateIntoHuman($result['StartDate']);
            $result['EndDateTime'] = $this->convertTimeIntoHuman($result['EndDateTime']);
            $result['StartDateTime'] = $this->convertTimeIntoHuman($result['StartDateTime']);
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
        $endDateParts = explode('-', $data['EndDate']);
        $startDateParts = explode('-', $data['StartDate']);
        $data['EndDate'] = "{$endDateParts[2]}-{$endDateParts[1]}-{$endDateParts[0]}";
        $data['EndDateTime'] = "{$data['EndDate']} {$data['EndDateTime']}:00";
        $data['StartDate'] = "{$startDateParts[2]}-{$startDateParts[1]}-{$startDateParts[0]}";
        $data['StartDateTime'] = "{$data['StartDate']} {$data['StartDateTime']}:00";
        return $data;
    }

    private function convertDateIntoHuman($date)
    {
        $dateParts = explode('-', substr($date, 0, strlen('0000-00-00')));
        return "{$dateParts[2]}-{$dateParts[1]}-{$dateParts[0]}";
    }

    private function convertTimeIntoHuman($time)
    {
        return substr($time, strlen('0000-00-00 '), 5);
    }
}