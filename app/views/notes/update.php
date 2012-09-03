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
    <div id="navform">

        <h1><acronym>Update Note</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('notes/update') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please update the details about the note:</legend>

                <label for='NotesID'><span class='required'>*</span>Note ID</label>
                <input name='NotesID' type='text' id='NotesID' readonly="readonly" value='<?php echo $note['NotesID'] ?>' />

                <label for='Title'><span class='required'>*</span>Title</label>
                <input name='Title' type='text' id='Title' value='<?php echo set_value('Title', $note['Title']) ?>' />
                <span class='note error'><?php echo form_error('Title') ?></span>

                <label for='Text'><span class='required'>*</span>Text</label>
                <textarea rows="" cols="" name="Text" id='Text'><?php echo set_value('Text', $note['Text']) ?></textarea>
                <span class='note error'><?php echo form_error('Text') ?></span>

                <label for='StudentID'><span class='required'>*</span>Student ID</label>
                <input name='StudentID' type='text' id='StudentID' value='<?php echo set_value('StudentID', $note['StudentID']) ?>' />
                <span class='note error'><?php echo form_error('StudentID') ?></span>

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