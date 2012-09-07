<div id="navform">

    <h1><acronym>View Student</acronym></h1>

    <p></p>

    <form class="DataForm" action="">

        <fieldset>

            <legend>Details about student:</legend>

            <label>Student ID</label>
            <div class='dataField'><?php echo $student['StudentID'] ?></div>

            <label>Name</label>
            <div class='dataField'><?php echo $student['Name'] ?></div>

            <label>Surname</label>
            <div class='dataField'><?php echo $student['Surname'] ?></div>

            <label>Date of Birth</label>
            <div class='dataField'><?php echo $student['DOB'] ?></div>

            <label>Address</label>
            <div class='dataField'><?php echo $student['Address'] ?></div>

            <label>Email</label>
            <div class='dataField'><?php echo $student['Email'] ?></div>

            <label>Home Telephone</label>
            <div class='dataField'><?php echo $student['HomeTel'] ?></div>

            <label>Mobile No.</label>
            <div class='dataField'><?php echo $student['Mob'] ?></div>

            <label>Username</label>
            <div class='dataField'><?php echo $student['Username'] ?></div>

            <label>Responsible Party</label>
            <div class='dataField'><?php echo $student['ResponsibleParty'] ?></div>

            <label>Gender</label>
            <div class='dataField'><?php echo $student['Gender'] == 0 ? 'Male' : 'Female' ?></div>

            <label>Details</label>
            <div class='dataField'><?php echo $student['Details'] ?></div>

            <label>Lat</label>
            <div class='dataField'><?php echo $student['Lat'] ?></div>

            <label>Long</label>
            <div class='dataField'><?php echo $student['Long'] ?></div>

            <label>Course ID</label>
            <div class='dataField'><?php echo $student['CourseID'] ?></div>

        </fieldset>

    </form>

</div>