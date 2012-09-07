<?php

if (!empty($isAdded)) {
    echo <<<EOF
        Record Added Successfully.
        <script language="javascript" type="text/javascript">
            refreshAll();
        </script>
EOF;

} else {
    if (empty($errorMsg)) : ?>

    <link href='<?php echo site_url('assets/css/jquery-ui-1.8.7.custom.css') ?>' rel='stylesheet' type='text/css' />
    <div id="navform">
        <h1><acronym>New Event</acronym></h1>
        <p></p>

        <div id='message'></div>

        <form method="post" action="<?php echo site_url('students/add') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please fill in the details about the student:</legend>

                <label for='Name'><span class='required'>*</span>Name</label>
                <input name='Name' type='text' id='Name' value='<?php echo set_value('Name') ?>' />
                <span class='note error'><?php echo form_error('Name') ?></span>

                <label for='Surname'><span class='required'>*</span>Surname</label>
                <input name='Surname' type='text' id='Surname' value='<?php echo set_value('Surname') ?>' />
                <span class='note error'><?php echo form_error('Surname') ?></span>

                <label for='DOB'><span class='required'>*</span>Date Of Birth</label>
                <input name='DOB' type='text' id='DOB' value='<?php echo set_value('DOB') ?>' />
                <span class='note error'><?php echo form_error('DOB') ?></span>

                <label for='Address'><span class='required'>*</span>Address</label>
                <input name='Address' type='text' id='Address' value='<?php echo set_value('Address') ?>' />
                <span class='note error'><?php echo form_error('Address') ?></span>

                <label for='Email'><span class='required'>*</span>Email</label>
                <input name='Email' type='text' id='Email' value='<?php echo set_value('Email') ?>' />
                <span class='note error'><?php echo form_error('Email') ?></span>

                <label for='HomeTel'><span class='required'>*</span>HomeTel</label>
                <input name='HomeTel' type='text' id='HomeTel' value='<?php echo set_value('HomeTel') ?>' />
                <span class='note error'><?php echo form_error('HomeTel') ?></span>

                <label for='Mob'><span class='required'>*</span>Mob</label>
                <input name='Mob' type='text' id='Mob' value='<?php echo set_value('Mob') ?>' />
                <span class='note error'><?php echo form_error('Mob') ?></span>

                <label for='Username'><span class='required'>*</span>Username</label>
                <input name='Username' type='text' id='Username' value='<?php echo set_value('Username') ?>' />
                <span class='note error'><?php echo form_error('Username') ?></span>

                <label for='Password'><span class='required'>*</span>Password</label>
                <input name='Password' type='text' id='Password' value='<?php echo set_value('Password') ?>' />
                <span class='note error'><?php echo form_error('Password') ?></span>

                <label for='ResponsibleParty'><span class='required'>*</span>ResponsibleParty</label>
                <input name='ResponsibleParty' type='text' id='ResponsibleParty' value='<?php echo set_value('ResponsibleParty') ?>' />
                <span class='note error'><?php echo form_error('ResponsibleParty') ?></span>

                <label for='Gender_0'><span class='required'>*</span>Gender</label>
                <input type="radio" name="Gender" value="0" id="Gender_0" <?php echo set_radio('Gender', '0') ?> /> Male
                <input type="radio" name="Gender" value="1" id="Gender_1" <?php echo set_radio('Gender', '1') ?> /> Female
                <span class='note error'><?php echo form_error('Gender') ?></span>

                <label for='Details'><span class='required'>*</span>Details</label>
                <input name='Details' type='text' id='Details' value='<?php echo set_value('Details') ?>' />
                <span class='note error'><?php echo form_error('Details') ?></span>

                <label for='CourseID'><span class='required'>*</span>Course ID</label>
                <input name='CourseID' type='text' id='CourseID' value='<?php echo set_value('CourseID') ?>' />
                <span class='note error'><?php echo form_error('CourseID') ?></span>

                <input name='Lat' type='hidden' id='Lat' />
                <input name='Long' type='hidden' id='Long' />

                <div class='form-buttons'>
                    <input type='submit' class='submit' id='submit' value='Add' />
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
        $("#DOB").datepicker({ dateFormat:'dd-mm-yy' });
    });
</script>