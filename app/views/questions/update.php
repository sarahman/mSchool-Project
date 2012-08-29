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

        <h1><acronym>Update Questions</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('questions/update') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please update the details about the questions:</legend>

                <label for='QuesID'><span class='required'>*</span>QuesID</label>
                <input name='QuesID' type='text' id='QuesID' size='30' value='<?php echo $question['QuesID'] ?>' />
                <span class='note error'><?php echo form_error('QuesID') ?></span>

                <label for='Question'><span class='required'>*</span>Question</label>
                <input name='Question' type='text' id='Question' size='30' value='<?php echo $question['Question'] ?>' />
                <span class='note error'><?php echo form_error('Question') ?></span>

                <label for='AnsA'><span class='required'>*</span>AnsA</label>
                <input name='AnsA' type='text' id='AnsA' size='30' value='<?php echo $question['AnsA'] ?>' />
                <span class='note error'><?php echo form_error('AnsA') ?></span>

                <label for='AnsB'><span class='required'>*</span>AnsB</label>
                <input name='AnsB' type='text' id='AnsB' size='30' value='<?php echo $question['AnsB'] ?>' />
                <span class='note error'><?php echo form_error('AnsB') ?></span>

                <label for='AnsC'><span class='required'>*</span>AnsC</label>
                <input name='AnsC' type='text' id='AnsC' size='30' value='<?php echo $question['AnsC'] ?>' />
                <span class='note error'><?php echo form_error('AnsC') ?></span>

                <label for='AnsD'><span class='required'>*</span>AnsD</label>
                <input name='AnsD' type='text' id='AnsD' size='30' value='<?php echo $question['AnsD'] ?>' />
                <span class='note error'><?php echo form_error('AnsD') ?></span>

                <label for='CorrAns'><span class='required'>*</span>CorrAns</label>
                <input name='CorrAns' type='text' id='CorrAns' size='30' value='<?php echo $question['CorrAns'] ?>' />
                <span class='note error'><?php echo form_error('CorrAns') ?></span>

                <label for='Explanation'><span class='required'>*</span>Explanation</label>
                <textarea name="Explanation" type='text' id='Explanation' cols=""
                          rows=""><?php echo $question['Explanation'] ?></textarea>
                <span class='note error'><?php echo form_error('Explanation') ?></span>

                <label for='Image'><span class='required'>*</span>Image</label>
                <input name='Image' type='text' id='Image' size='30' value='<?php echo $question['Image'] ?>' />
                <span class='note error'><?php echo form_error('Image') ?></span>

                <label for='QuizID'><span class='required'>*</span>QuizID</label>
                <input name='QuizID' type='text' id='QuizID' size='30' value='<?php echo $question['QuizID'] ?>' />
                <span class='note error'><?php echo form_error('QuizID') ?></span>

                <div id='form-buttons'>
                    <input type='submit' class='submit' id='submit' value='Update' />
                    <input type='button' class='submit' id='pop-out' value='Cancel' />
                </div>

            </fieldset>

    <?php if (empty($errorMsg)) : ?>

        </form>

    </div>
    <?php endif;
} ?>