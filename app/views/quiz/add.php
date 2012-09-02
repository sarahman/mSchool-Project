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

        <h1><acronym>New Quiz</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('quiz/add') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please fill in the details about the quiz:</legend>

                <label for='Title'><span class='required'>*</span>Title</label>
                <input name='Title' type='text' id='Title' size='30' value='<?php echo set_value('Title') ?>' />
                <span class='note error'><?php echo form_error('Title') ?></span>

                <label for='Description'><span class='required'>*</span>Description</label>
                <textarea name="Description" id='Description' cols="3" rows=""><?php echo set_value('Description') ?></textarea>
                <span class='note error'><?php echo form_error('Description') ?></span>

                <label for='ExpiryDate'><span class='required'>*</span>Expiry Date</label>
                <input name='ExpiryDate' type='text' id='ExpiryDate' size='30' value='<?php echo set_value('ExpiryDate') ?>' />
                <span class='note error'><?php echo form_error('ExpiryDate') ?></span>

                <label for='ExpiryTime'><span class='required'>*</span>Expiry Time</label>
                <input name='ExpiryTime' type='text' id='ExpiryTime' size='30' value='<?php echo set_value('ExpiryTime') ?>' />
                <span class='note error'><?php echo form_error('ExpiryTime') ?></span>

                <label for='LecturerID'><span class='required'>*</span>Lecturer ID</label>
                <input name='LecturerID' type='text' id='LecturerID' size='30' value='<?php echo set_value('LecturerID') ?>' />
                <span class='note error'><?php echo form_error('LecturerID') ?></span>

                <label for='CategoryID'><span class='required'>*</span>Category ID</label>
                <input name='CategoryID' type='text' id='CategoryID' size='30' value='<?php echo set_value('CategoryID') ?>' />
                <span class='note error'><?php echo form_error('CategoryID') ?></span>

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
    (function ($) {
        $('#ExpiryTime').timepicker();
        $("#ExpiryDate").datepicker({ dateFormat:'dd-mm-yy' });
    })(jQuery);
</script>