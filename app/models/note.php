<?php

class Note extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblnotes', 'NotesID');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getAllByDate()
    {
        $result = array();
        $count = 0;
        $notesDates = $this->executeQuery("SELECT DISTINCT DATE(`DateTimeAdded`) AS `Date` FROM `{$this->tableName}`");
        foreach ($notesDates as $date) {
            $notes = $this->executeQuery("SELECT * FROM `{$this->tableName}` WHERE DATE(`DateTimeAdded`)='{$date['Date']}'");
            $result[$count]['date'] = $date['Date'];
            $result[$count]['notes'] = $notes;
            $count++;
        }

        return $result;
    }

    public function getDetail($noteId)
    {
        $result = $this->find(array($this->primaryKey => $noteId));
        return $result;
    }

    public function save(array $data)
    {
        $data['DateTimeAdded'] = $data['LastUpdated'] = date('Y-m-d H:i:s');
        return $this->insert($data);
    }

    public function modify(array $data)
    {
        $data['LastUpdated'] = date('Y-m-d H:i:s');
        return $this->update($data, $data[$this->primaryKey]);
    }

    public function delete($quizId)
    {
        return $this->remove($quizId);
    }
}