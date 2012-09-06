<div id="navform">
    <h1><acronym>View Notification</acronym></h1>

    <p></p>

    <form class="DataForm" action="">

        <fieldset>

            <legend>Detail about notification:</legend>

            <label>Notification ID</label>
            <div class='dataField'><?php echo $notification['NotID'] ?></div>

            <label>Message</label>
            <div class='dataField'><?php echo $notification['Message'] ?></div>

            <label>Subject</label>
            <div class='dataField'><?php echo $notification['Subject'] ?></div>

            <label>From Lecturer ID</label>
            <div class='dataField'><?php echo $notification['FromLectID'] ?></div>

            <label>From Student ID</label>
            <div class='dataField'><?php echo $notification['FromStudID'] ?></div>

            <label>To Lecturer ID</label>
            <div class='dataField'><?php echo $notification['ToLecID'] ?></div>

            <label>To Student ID</label>
            <div class='dataField'><?php echo $notification['ToStudID'] ?></div>

            <label>Delivered Date</label>
            <div class='dataField'><?php echo $notification['DelieveredDate'] ?></div>

            <label>Sent Date Time</label>
            <div class='dataField'><?php echo $notification['SendDateTime'] ?></div>

        </fieldset>

    </form>

</div>