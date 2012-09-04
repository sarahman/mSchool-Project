<div id="navform">

    <h1><acronym>View Event</acronym></h1>

    <p></p>

    <form class="DataForm" action="">

        <fieldset>

            <legend>Details about event:</legend>

            <label>Event ID</label>
            <div class='dataField' style="padding-top: 5px"><?php echo $event['EventID'] ?></div>

            <label>Title</label>
            <div class='dataField'><?php echo $event['Title'] ?></div>

            <label>Description</label>
            <div class='dataField'><?php echo $event['Description'] ?></div>

            <label>Location</label>
            <div class='dataField'><?php echo $event['Location'] ?></div>

            <label>Lat</label>
            <div class='dataField'><?php echo $event['Lat'] ?></div>

            <label>Long</label>
            <div class='dataField'><?php echo $event['Long'] ?></div>

            <label>Starting Date</label>
            <div class='dataField'><?php echo $event['StartDate'] ?></div>

            <label>Starting Time</label>
            <div class='dataField'><?php echo $event['StartDateTime'] ?></div>

            <label>Ending Date</label>
            <div class='dataField'><?php echo $event['EndDate'] ?></div>

            <label>Ending Time</label>
            <div class='dataField'><?php echo $event['EndDateTime'] ?></div>

            <label>MaxAttendee</label>
            <div class='dataField'><?php echo $event['MaxAttendee'] ?></div>

            <label>Creator ID</label>
            <div class='dataField'><?php echo $event['CreatorID'] ?></div>

            <label>Responsible</label>
            <div class='dataField'><?php echo $event['Responsible'] ?></div>

        </fieldset>

    </form>

</div>