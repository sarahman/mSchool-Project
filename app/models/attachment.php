<?php

class Attachment extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblattachments', 'AttachmentID');
    }

    public function getAll()
    {
        return $this->findAll();
    }

    public function getByWeek($weekId)
    {
        $sql = "SELECT * FROM `{$this->tableName}`
                WHERE `{$this->primaryKey}` IN (
                    SELECT `{$this->primaryKey}` FROM `tbllectatt`
                    WHERE `LectID` IN (
                        SELECT `LectID` FROM `tbllectures`
                        WHERE `WeekID`={$weekId}))";

        return $this->executeQuery($sql);
    }
}