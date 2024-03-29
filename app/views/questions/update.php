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

        <h1><acronym>Update Question</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('questions/update') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>

            <fieldset>

                <legend>Please update the details about the question:</legend>

                <label for='QuesID'><span class='required'>*</span>Question ID</label>
                <input name='QuesID' type='text' id='QuesID' readonly="readonly" value='<?php echo $question['QuesID'] ?>' />

                <label for='Question'><span class='required'>*</span>Question</label>
                <input name='Question' type='text' id='Question' value='<?php echo $question['Question'] ?>' />
                <span class='note error'><?php echo form_error('Question') ?></span>

                <label for='AnsA'><span class='required'>*</span>Answer A</label>
                <input name='AnsA' type='text' id='AnsA' value='<?php echo $question['AnsA'] ?>' />
                <span class='note error'><?php echo form_error('AnsA') ?></span>

                <label for='AnsB'><span class='required'>*</span>Answer B</label>
                <input name='AnsB' type='text' id='AnsB' value='<?php echo $question['AnsB'] ?>' />
                <span class='note error'><?php echo form_error('AnsB') ?></span>

                <label for='AnsC'><span class='required'>*</span>Answer C</label>
                <input name='AnsC' type='text' id='AnsC' value='<?php echo $question['AnsC'] ?>' />
                <span class='note error'><?php echo form_error('AnsC') ?></span>

                <label for='AnsD'><span class='required'>*</span>Answer D</label>
                <input name='AnsD' type='text' id='AnsD' value='<?php echo $question['AnsD'] ?>' />
                <span class='note error'><?php echo form_error('AnsD') ?></span>

                <label for='CorrAns'><span class='required'>*</span>Correct Answer</label>
                <select name="CorrAns" id='CorrAns' size="0">
                    <option value="1" <?php echo set_select('CorrAns', '1', '1' == $question['CorrAns']) ?>>A</option>
                    <option value="2" <?php echo set_select('CorrAns', '2', '2' == $question['CorrAns']) ?>>B</option>
                    <option value="3" <?php echo set_select('CorrAns', '3', '3' == $question['CorrAns']) ?>>C</option>
                    <option value="4" <?php echo set_select('CorrAns', '4', '4' == $question['CorrAns']) ?>>D</option>
                </select>
                <span class='note error'><?php echo form_error('CorrAns') ?></span>

                <label for='Explanation'>Explanation</label>
                <textarea name="Explanation" id='Explanation' cols=""
                          rows=""><?php echo $question['Explanation'] ?></textarea>
                <span class='note error'><?php echo form_error('Explanation') ?></span>

                <label for='Image'>Image</label>
                <input name='Image' type='text' id='Image' value='<?php echo $question['Image'] ?>' />
                <span class='note error'><?php echo form_error('Image') ?></span>

                <label for='QuizID'><span class='required'>*</span>Quiz ID</label>
                <input name='QuizID' type='text' id='QuizID' value='<?php echo $question['QuizID'] ?>' />
                <span class='note error'><?php echo form_error('QuizID') ?></span>

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