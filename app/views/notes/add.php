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
        <h1><acronym>New Note</acronym></h1>
        <p></p>

        <div id='message'></div>

        <form method="post" action="<?php echo site_url('notes/add') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please fill in the details about the note:</legend>

                <label for='Title'><span class='required'>*</span>Title</label>
                <input name='Title' type='text' id='Title' value='<?php echo set_value('Title') ?>' />
                <span class='note error'><?php echo form_error('Title') ?></span>

                <label for='Text'><span class='required'>*</span>Text</label>
                <textarea rows="" cols="" name="Text" id='Text'><?php echo set_value('Text') ?></textarea>
                <span class='note error'><?php echo form_error('Text') ?></span>

                <label for='StudentID'><span class='required'>*</span>Student ID</label>
                <input name='StudentID' type='text' id='StudentID' value='<?php echo set_value('StudentID') ?>' />
                <span class='note error'><?php echo form_error('StudentID') ?></span>

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