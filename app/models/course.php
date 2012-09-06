<?php

class Course extends My_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->loadTable('tblcourses', 'CourseID');
    }

    public function getAll()
    {
        $result = array();
        $courses = $this->findAll(null, '`CourseId`, `Code`, `LectID`');

        if (!empty($courses)) {
            foreach($courses AS $course) {
                $sql = "SELECT `tblcoursemodules`.*, `tblmodule`.`Name` FROM `tblcoursemodules` JOIN `tblmodule`
                        ON `tblcoursemodules`.`ModuleID` = `tblmodule`.`ModuleID`
                        WHERE `tblcoursemodules`.`CourseID`='{$course['CourseId']}'";

                $courseModules = $this->executeQuery($sql);
                foreach($courseModules AS $courseModule) {
                    $sql = "SELECT * FROM `tblmodulestudent` AS `ms` JOIN `tblstudents` AS `s`
                            ON `ms`.`StudentID`=`s`.`StudentID` WHERE `ModuleID`='{$courseModule['ModuleID']}'";

                    $students = $this->executeQuery($sql);
                    foreach($students AS $student) {
                        $result[$course['Code']][$courseModule['Name']][] = $student;
                    }

                }
            }
        }

        return $result;
    }
}