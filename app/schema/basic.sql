SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `tblattachments` (
  `AttachmentID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`AttachmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblattendee` (
  `AttendeeID` int(11) NOT NULL AUTO_INCREMENT,
  `EventID` int(11) DEFAULT NULL,
  `LectID` int(11) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`AttendeeID`),
  KEY `FK_tblattendee` (`LectID`),
  KEY `FK_tblattendee2` (`StudentID`),
  KEY `FK_tblattendee3` (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblcoursemodules` (
  `CourseModuleID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseID` int(11) DEFAULT NULL,
  `ModuleID` int(11) NOT NULL,
  PRIMARY KEY (`CourseModuleID`),
  KEY `FK_tblcoursemodules` (`CourseID`),
  KEY `FK_tblcoursemodules2` (`ModuleID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblcourses` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Code` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `LectID` int(11) DEFAULT NULL,
  `YearStarted` datetime DEFAULT NULL,
  `TimeTableID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CourseID`),
  KEY `FK_tblcourses` (`LectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblevents` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` text,
  `Location` varchar(50) DEFAULT NULL,
  `Lat` varchar(10) DEFAULT NULL,
  `Long` varchar(10) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `MaxAttendee` int(11) DEFAULT NULL,
  `CreatorID` int(11) DEFAULT NULL,
  `Responsible` varchar(50) DEFAULT NULL,
  `StartDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  PRIMARY KEY (`EventID`),
  KEY `FK_tblevents` (`CreatorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblgameplayed` (
  `GamePlayedID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) DEFAULT NULL,
  `GameID` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `DateTimeStarted` datetime DEFAULT NULL,
  `DateTimeEnded` datetime DEFAULT NULL,
  `Comment` text,
  PRIMARY KEY (`GamePlayedID`),
  KEY `FK_tblgameplayed` (`StudentID`),
  KEY `FK_tblgameplayed2` (`GameID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblgames` (
  `GameID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Details` text,
  PRIMARY KEY (`GameID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblinstitution` (
  `InstID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Fax` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`InstID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tbllectatt` (
  `LecAttID` int(11) NOT NULL AUTO_INCREMENT,
  `AttachmentID` int(11) DEFAULT NULL,
  `LectID` int(11) DEFAULT NULL,
  PRIMARY KEY (`LecAttID`),
  KEY `FK_tbllectatt` (`LectID`),
  KEY `FK_tbllectatt2` (`AttachmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tbllecturer` (
  `LectID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Tel` varchar(10) DEFAULT NULL,
  `Mob` varchar(10) DEFAULT NULL,
  `Fax` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Lat` varchar(10) DEFAULT NULL,
  `Long` varchar(10) DEFAULT NULL,
  `SchoolID` int(10) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `InstID` int(10) DEFAULT NULL,
  `TimeTableID` int(10) DEFAULT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `Active` tinyint(1) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`LectID`),
  KEY `FK_tbllecturer` (`InstID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tbllectures` (
  `LectID` int(11) NOT NULL AUTO_INCREMENT,
  `Text` varchar(50) DEFAULT NULL,
  `WeekID` int(11) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`LectID`),
  KEY `FK_tbllectures` (`WeekID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblmodule` (
  `ModuleID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Description` varchar(50) DEFAULT NULL,
  `LectID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ModuleID`),
  KEY `FK_tblmodule` (`LectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblmodulelect` (
  `ModuleLectID` int(11) NOT NULL AUTO_INCREMENT,
  `ModuleID` int(11) DEFAULT NULL,
  `LectID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ModuleLectID`),
  KEY `FK_tblmodulelect` (`ModuleID`),
  KEY `FK_tblmodulelect2` (`LectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblmodulestudent` (
  `ModuleStudentID` int(11) NOT NULL AUTO_INCREMENT,
  `ModuleID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  PRIMARY KEY (`ModuleStudentID`),
  KEY `ModuleID` (`ModuleID`),
  KEY `StudentID` (`StudentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE IF NOT EXISTS `tblnotes` (
  `NotesID` int(11) NOT NULL AUTO_INCREMENT,
  `Text` longtext,
  `DateTimeAdded` datetime DEFAULT NULL,
  `LastUpdated` datetime DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  PRIMARY KEY (`NotesID`),
  KEY `FK_tblnotes` (`StudentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblnotifications` (
  `NotID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` varchar(50) DEFAULT NULL,
  `Subject` varchar(20) DEFAULT NULL,
  `FromLectID` int(11) DEFAULT NULL,
  `FromStudID` int(11) DEFAULT NULL,
  `ToLecID` int(11) DEFAULT NULL,
  `ToStudID` int(11) DEFAULT NULL,
  `DelieveredDate` datetime DEFAULT NULL,
  `SendDateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`NotID`),
  KEY `FK_tblnotifications` (`FromLectID`),
  KEY `FK_tblnotifications2` (`ToLecID`),
  KEY `FK_tblnotifications3` (`FromStudID`),
  KEY `FK_tblnotifications4` (`ToStudID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblquestions` (
  `QuesID` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(250) DEFAULT NULL,
  `AnsA` varchar(150) DEFAULT NULL,
  `AnsB` varchar(150) DEFAULT NULL,
  `AnsC` varchar(150) DEFAULT NULL,
  `AnsD` varchar(150) DEFAULT NULL,
  `CorrAns` varchar(2) DEFAULT NULL,
  `Explanation` text,
  `Image` varchar(80) DEFAULT NULL,
  `QuizID` int(11) DEFAULT NULL,
  PRIMARY KEY (`QuesID`),
  KEY `FK_tblquestions` (`QuizID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblquiz` (
  `QuizID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Description` text,
  `ExpiryDate` datetime DEFAULT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LecturerID` int(11) DEFAULT NULL,
  `Participants` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `ExpiryTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`QuizID`),
  KEY `FK_tblquiz` (`CategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblquizcat` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblquizpart` (
  `QuizPartID` int(11) NOT NULL AUTO_INCREMENT,
  `QuizID` int(11) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `CorrectAns` int(11) DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `DateTimeStarted` datetime DEFAULT NULL,
  `DateTimeEnded` datetime DEFAULT NULL,
  `Comment` text,
  PRIMARY KEY (`QuizPartID`),
  KEY `FK_tblquizpart` (`StudentID`),
  KEY `FK_tblquizpart2` (`QuizID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblstudents` (
  `StudentID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `DOB` datetime DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `HomeTel` varchar(10) DEFAULT NULL,
  `Mob` varchar(10) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `ResponsibleParty` varchar(50) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Details` varchar(200) DEFAULT NULL,
  `Lat` varchar(10) DEFAULT NULL,
  `Long` varchar(10) DEFAULT NULL,
  `CourseID` int(11) DEFAULT NULL,
  PRIMARY KEY (`StudentID`),
  KEY `FK_tblstudents` (`CourseID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tbltimetable` (
  `TimeTableID` int(11) NOT NULL AUTO_INCREMENT,
  `ImageURL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TimeTableID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `tblweek` (
  `WeekID` int(11) NOT NULL AUTO_INCREMENT,
  `Start` datetime DEFAULT NULL,
  `End` datetime DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`WeekID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


ALTER TABLE `tblattendee`
  ADD CONSTRAINT `FK_tblattendee` FOREIGN KEY (`LectID`) REFERENCES `tbllecturer` (`LectID`),
  ADD CONSTRAINT `FK_tblattendee2` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`),
  ADD CONSTRAINT `FK_tblattendee3` FOREIGN KEY (`EventID`) REFERENCES `tblevents` (`EventID`);

ALTER TABLE `tblcoursemodules`
  ADD CONSTRAINT `FK_tblcoursemodules` FOREIGN KEY (`CourseID`) REFERENCES `tblcourses` (`CourseID`),
  ADD CONSTRAINT `FK_tblcoursemodules2` FOREIGN KEY (`ModuleID`) REFERENCES `tblmodule` (`ModuleID`);

ALTER TABLE `tblcourses`
  ADD CONSTRAINT `FK_tblcourses` FOREIGN KEY (`LectID`) REFERENCES `tbllecturer` (`LectID`);

ALTER TABLE `tblevents`
  ADD CONSTRAINT `FK_tblevents` FOREIGN KEY (`CreatorID`) REFERENCES `tbllecturer` (`LectID`);

ALTER TABLE `tblgameplayed`
  ADD CONSTRAINT `FK_tblgameplayed` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`),
  ADD CONSTRAINT `FK_tblgameplayed2` FOREIGN KEY (`GameID`) REFERENCES `tblgames` (`GameID`);

ALTER TABLE `tbllectatt`
  ADD CONSTRAINT `FK_tbllectatt` FOREIGN KEY (`LectID`) REFERENCES `tbllectures` (`LectID`),
  ADD CONSTRAINT `FK_tbllectatt2` FOREIGN KEY (`AttachmentID`) REFERENCES `tblattachments` (`AttachmentID`);

ALTER TABLE `tbllecturer`
  ADD CONSTRAINT `FK_tbllecturer` FOREIGN KEY (`InstID`) REFERENCES `tblinstitution` (`InstID`);

ALTER TABLE `tbllectures`
  ADD CONSTRAINT `FK_tbllectures` FOREIGN KEY (`WeekID`) REFERENCES `tblweek` (`WeekID`);

ALTER TABLE `tblmodule`
  ADD CONSTRAINT `FK_tblmodule` FOREIGN KEY (`LectID`) REFERENCES `tbllecturer` (`LectID`);

ALTER TABLE `tblmodulelect`
  ADD CONSTRAINT `FK_tblmodulelect` FOREIGN KEY (`ModuleID`) REFERENCES `tblmodule` (`ModuleID`),
  ADD CONSTRAINT `FK_tblmodulelect2` FOREIGN KEY (`LectID`) REFERENCES `tbllectures` (`LectID`);

ALTER TABLE `tblmodulestudent`
  ADD CONSTRAINT `tblmodulestudent_ibfk_1` FOREIGN KEY (`ModuleID`) REFERENCES `tblmodule` (`ModuleID`),
  ADD CONSTRAINT `tblmodulestudent_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`);

ALTER TABLE `tblnotes`
  ADD CONSTRAINT `FK_tblnotes` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`);

ALTER TABLE `tblnotifications`
  ADD CONSTRAINT `FK_tblnotifications` FOREIGN KEY (`FromLectID`) REFERENCES `tbllecturer` (`LectID`),
  ADD CONSTRAINT `FK_tblnotifications2` FOREIGN KEY (`ToLecID`) REFERENCES `tbllecturer` (`LectID`),
  ADD CONSTRAINT `FK_tblnotifications3` FOREIGN KEY (`FromStudID`) REFERENCES `tblstudents` (`StudentID`),
  ADD CONSTRAINT `FK_tblnotifications4` FOREIGN KEY (`ToStudID`) REFERENCES `tblstudents` (`StudentID`);

ALTER TABLE `tblquestions` ADD CONSTRAINT `FK_tblquestions` FOREIGN KEY (`QuizID`)
  REFERENCES `tblquiz` (`QuizID`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `tblquiz`
  ADD CONSTRAINT `FK_tblquiz` FOREIGN KEY (`CategoryID`) REFERENCES `tblquizcat` (`CategoryID`);

ALTER TABLE `tblquizpart`
  ADD CONSTRAINT `FK_tblquizpart` FOREIGN KEY (`StudentID`) REFERENCES `tblstudents` (`StudentID`),
  ADD CONSTRAINT `FK_tblquizpart2` FOREIGN KEY (`QuizID`) REFERENCES `tblquiz` (`QuizID`);

ALTER TABLE `tblstudents`
  ADD CONSTRAINT `FK_tblstudents` FOREIGN KEY (`CourseID`) REFERENCES `tblcourses` (`CourseID`);

SET FOREIGN_KEY_CHECKS=1;