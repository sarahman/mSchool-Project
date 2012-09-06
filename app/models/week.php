<?php

class Week extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblweek', 'WeekID');
    }

    public function getAll()
    {
        return $this->findAll();
    }
}