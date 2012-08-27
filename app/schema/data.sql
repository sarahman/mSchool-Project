SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

INSERT INTO `tblattachments` (`AttachmentID`, `Path`, `Description`) VALUES
  (1, '/oajsdo/aojsdoia/', 'oajsdioajodjioad'),
  (2, '/kalkala/', 'nasdadsad'),
  (3, '/asasdasdasd/ajsdojoaisd/', 'oisdiooscowsdwodwedw'),
  (4, '/asjdiojaoi/', 'aojsdojaoisjdads');

INSERT INTO `tblcoursemodules` (`CourseModuleID`, `CourseID`, `ModuleID`) VALUES (1, 2, 2), (2, 1, 1);

INSERT INTO `tblcourses` (`CourseID`, `Name`, `Code`, `Description`, `LectID`, `YearStarted`, `TimeTableID`) VALUES
  (1, 'Bse Software Engineering', 'BSE08', 'Software Enginnering Code', 1, '2011-05-05 00:00:00', 1),
  (2, 'Computer Science And Engineering', 'CSE08', 'Computer Science And Engineering', 1, '2011-04-05 20:40:39', NULL);

INSERT INTO `tblevents` (`EventID`, `Title`, `Description`, `Location`, `Lat`, `Long`, `StartDateTime`, `EndDateTime`, `MaxAttendee`, `CreatorID`, `Responsible`, `StartDate`, `EndDate`) VALUES
  (1, 'sfsf', 'sadfasf', 'sdfasdf', NULL, NULL, '2011-02-15 20:00:00', '2011-02-15 15:00:00', 34, NULL, NULL, NULL, NULL),
  (2, 'Valentine Partysss', 'kjahd', 'eben ', NULL, NULL, '2011-02-15 07:25:00', '2011-02-15 08:15:00', 33, NULL, NULL, '2011-02-18 10:19:59', '2011-02-18 10:19:59'),
  (3, 'Valentine Partysss', 'kjahd', 'ebens', NULL, NULL, '2011-02-15 07:25:00', '2011-02-15 08:15:00', 33, NULL, NULL, '2011-02-01 00:00:00', '2011-02-19 00:00:00'),
  (5, 'sfsf', 'sdfsdfsfd', 'sdfsd', NULL, NULL, '2011-02-17 08:20:00', '2011-02-17 09:25:00', 34, NULL, NULL, '2011-02-01 00:00:00', '2011-02-09 00:00:00'),
  (6, 'sdf', 'sdfsdfs', 'sdfsf', NULL, NULL, '2011-02-17 02:05:00', '2011-02-17 15:05:00', 34, NULL, NULL, '2011-02-02 00:00:00', '2011-02-16 00:00:00'),
  (8, 'sfasdf', 'asdgdgshfdgsdfg', 'asdfasdf', NULL, NULL, '2011-02-17 21:05:00', '2011-02-17 20:05:00', 22, NULL, NULL, '2011-02-01 00:00:00', '2011-02-01 00:00:00'),
  (9, 'sdfasdf', 'sdfgf', 'sdgdg', NULL, NULL, '2011-02-17 02:10:00', '2011-02-17 22:10:00', 32, NULL, NULL, '2011-02-23 00:00:00', '2011-02-24 00:00:00'),
  (11, 'sasfsdf', 'dfsafasf', 'asdfsaf', NULL, NULL, '2011-02-17 02:00:00', '2011-02-17 21:15:00', 23, NULL, NULL, '2011-02-15 00:00:00', '2011-02-22 00:00:00'),
  (12, 'wer', 'eryryery', 'erytertyeryery', NULL, NULL, '2011-02-17 23:35:00', '2011-02-17 10:35:00', 3, NULL, NULL, '2011-02-24 00:00:00', '2011-02-23 00:00:00');

INSERT INTO `tbllectatt` (`LecAttID`, `AttachmentID`, `LectID`) VALUES
  (1, 1, 3), (2, 2, 4), (3, 3, 3), (4, 4, 3);

INSERT INTO `tbllecturer` (`LectID`, `Name`, `Surname`, `Tel`, `Mob`, `Fax`, `Email`, `Address`, `Lat`, `Long`, `SchoolID`, `Title`, `InstID`, `TimeTableID`, `DateCreated`, `Active`, `username`, `password`) VALUES
  (1, 'Naveesh', 'Doolhur', '2306274337', '93562614', NULL, NULL, 'Royal Road Mare D''Albert', NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, 'darklord', 'darklord'),
  (2, 'Syed Abidur Rahman', 'Abid', '9011169', '0191488622', NULL, 'aabid048@gmail.com', 'monipur, dhaka', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abid', '111111');

INSERT INTO `tbllectures` (`LectID`, `Text`, `WeekID`, `Title`, `Description`) VALUES
  (3, 'jddsjaoisdiajods', 1, 'sdajsdjioasdf', 'sjdfjsoiajdfioasdf'),
  (4, 'ASDASD', 3, 'CWEDW', 'sdvsdvsdv'),
  (5, 'asdasdasdasdasdasd', 1, 'assasdad', 'adsd'),
  (6, 'tygrtbrbgteb', 2, 'ebebergert', 'retgertgergeg');

INSERT INTO `tblmodule` (`ModuleID`, `Name`, `Description`, `LectID`) VALUES
  (1, 'gkg', 'gjgjgj', 2), (2, 'rtyu', 'fgbv bnbnbnbn', 1);

INSERT INTO `tblmodulestudent` (`ModuleStudentID`, `ModuleID`, `StudentID`) VALUES
  (1, 2, 4), (2, 1, 4);

INSERT INTO `tblnotes` (`NotesID`, `Text`, `DateTimeAdded`, `LastUpdated`, `Title`, `StudentID`) VALUES
  (8, 'swsefsdfs sssafasfw 3r23r232 3sa sjd ajskdakjsdasda sdihaisdhiasdhaiu diwdiuqwiiuuadihas hdiashdiasdasdas dasdasdadasdasdasda sdasdasdadsads ', '2011-04-06 01:37:29', NULL, 'sdfsdfdffffffffffffffffff', 4),
  (9, '12wqdwasdasdasdasd', '2011-04-06 01:37:29', NULL, 'ffffffffffffffasdadada', 4);

INSERT INTO `tblquestions` (`QuesID`, `Question`, `AnsA`, `AnsB`, `AnsC`, `AnsD`, `CorrAns`, `Explanation`,
  `Image`, `QuizID`) VALUES (1, 'sas', 'fasfasf', 'sfasfasd', 'saf', 'asdf', '', 'asdfsad', NULL, NULL);

INSERT INTO `tblquiz` (`QuizID`, `Title`, `Description`, `ExpiryDate`, `CreatedOn`, `LecturerID`, `Participants`, `CategoryID`, `ExpiryTime`) VALUES
  (6, 'Test', 'tsdfs', '2011-02-22 00:00:00', '2011-02-07 02:09:44', 1, NULL, NULL, '2011-02-07 21:10:00'),
  (7, 'tes', 'test', '2011-02-22 00:00:00', '2011-02-07 02:10:05', 1, NULL, 1, '2011-04-17 23:10:00'),
  (8, 'Valentine', 'sdfsf', '2011-02-15 11:40:32', '2011-02-15 11:40:32', NULL, NULL, NULL, '2011-02-15 11:40:32'),
  (9, NULL, NULL, '2011-04-16 19:36:54', '2011-04-16 19:36:30', 1, NULL, NULL, '2011-04-16 19:36:54'),
  (10, NULL, NULL, '2011-04-16 19:36:59', '2011-04-16 19:36:35', 1, NULL, NULL, '2011-04-16 19:36:59'),
  (11, NULL, NULL, '2011-04-16 19:37:03', '2011-04-16 19:36:39', 1, NULL, NULL, '2011-04-16 19:37:03'),
  (12, NULL, NULL, '2011-04-16 19:37:07', '2011-04-16 19:36:43', 1, NULL, NULL, '2011-04-16 19:37:07'),
  (14, 'fasf', 'afsfaaf', '2011-04-18 00:00:00', '2011-04-16 20:42:09', 1, NULL, NULL, '2011-04-16 20:40:00'),
  (15, 'fdhdfh', 'dhddh', '2011-04-16 00:00:00', '2011-04-16 20:42:46', 1, NULL, NULL, '2011-04-16 18:45:00');

INSERT INTO `tblquizcat` (`CategoryID`, `Name`) VALUES (1, 'written test');

INSERT INTO `tblstudents` (`StudentID`, `Name`, `Surname`, `DOB`, `Address`, `Email`, `HomeTel`, `Mob`, `Username`,
  `Password`, `ResponsibleParty`, `Gender`, `Details`, `Lat`, `Long`, `CourseID`) VALUES
  (4, 'Naveesh ', 'Doolhur', '2011-03-09 00:00:00', 'Royal Road Mare D', 'navmob@gmail.com', '9352615', '9183504',
  'darklord', 'darklord', 'test', NULL, 'sdf', NULL, NULL, NULL);

INSERT INTO `tblweek` (`WeekID`, `Start`, `End`, `Name`) VALUES
  (1, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week1'),
  (2, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week2'),
  (3, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week3'),
  (4, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week4'),
  (5, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week5'),
  (6, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week6'),
  (7, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week7'),
  (8, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week8'),
  (9, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week9'),
  (10, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week10'),
  (11, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week11'),
  (12, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week12'),
  (13, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week13'),
  (14, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week14'),
  (15, '2011-05-05 00:00:00', '2011-05-05 00:00:00', 'Week15');

SET FOREIGN_KEY_CHECKS=1;