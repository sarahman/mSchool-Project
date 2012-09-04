<?php

if (!empty($isUpdated)) {
    echo <<<EOF
        Record Updated Successfully.
        <script language="javascript" type="text/javascript">
            refreshAll();
        </script>
EOF;

} else {
    if (empty($errorMsg)) : ?>

    <link href='<?php echo site_url('assets/css/jquery-ui-1.8.7.custom.css') ?>' rel='stylesheet' type='text/css' />
    <div id="navform">

        <h1><acronym>Update Event</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('events/update') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please update the details about the event:</legend>

                <label for='EventID'><span class='required'>*</span>Event ID</label>
                <input name='EventID' type='text' id='EventID' readonly="readonly" value='<?php echo $event['EventID'] ?>' />

                <label for='Title'><span class='required'>*</span>Title</label>
                <input name='Title' type='text' id='Title' value='<?php echo set_value('Title', $event['Title']) ?>' />
                <span class='note error'><?php echo form_error('Title') ?></span>

                <label for='Description'><span class='required'>*</span>Description</label>
                <input name='Description' type='text' id='Description' value='<?php echo set_value('Description', $event['Description']) ?>' />
                <span class='note error'><?php echo form_error('Description') ?></span>

                <label for='Location'><span class='required'>*</span>Location</label>
                <input name='Location' type='text' id='Location' value='<?php echo set_value('Location', $event['Location']) ?>' />
                <span class='note error'><?php echo form_error('Location') ?></span>

                <label for='StartDateTime'><span class='required'>*</span>Starting Time</label>
                <input name='StartDateTime' type='text' id='StartDateTime' value='<?php echo set_value('StartDateTime', $event['StartDateTime']) ?>' />
                <span class='note error'><?php echo form_error('StartDateTime') ?></span>

                <label for='StartDate'><span class='required'>*</span>Starting Date</label>
                <input name='StartDate' type='text' id='StartDate' value='<?php echo set_value('StartDate', $event['StartDate']) ?>' />
                <span class='note error'><?php echo form_error('StartDate') ?></span>

                <label for='EndDateTime'><span class='required'>*</span>Ending Time</label>
                <input name='EndDateTime' type='text' id='EndDateTime' value='<?php echo set_value('EndDateTime', $event['EndDateTime']) ?>' />
                <span class='note error'><?php echo form_error('EndDateTime') ?></span>

                <label for='EndDate'><span class='required'>*</span>Ending Date</label>
                <input name='EndDate' type='text' id='EndDate' value='<?php echo set_value('EndDate', $event['EndDate']) ?>' />
                <span class='note error'><?php echo form_error('EndDate') ?></span>

                <label for='MaxAttendee'><span class='required'>*</span>Maximum Attendee</label>
                <input name='MaxAttendee' type='text' id='MaxAttendee' value='<?php echo set_value('MaxAttendee', $event['MaxAttendee']) ?>' />
                <span class='note error'><?php echo form_error('MaxAttendee') ?></span>

                <input name='Lat' type='hidden' id='Lat' />
                <input name='Long' type='hidden' id='Long' />
                <input name='Responsible' type='hidden' id='Responsible' />

                <div class='form-buttons'>
                    <input type='submit' class='submit' id='submit' value='Update' />
                    <input type='button' class='submit' id='pop-out' value='Cancel' />
                </div>

            </fieldset>

    <?php if (empty($errorMsg)) : ?>

        </form>

    </div>
    <?php endif;
} ?>

<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.core.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.timepicker-0.0.6.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.datepicker.js') ?>"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $('#StartDateTime').timepicker();
        $('#EndDateTime').timepicker();
        $("#StartDate").datepicker({ dateFormat:'dd-mm-yy' });
        $("#EndDate").datepicker({ dateFormat:'dd-mm-yy' });
    });
</script>