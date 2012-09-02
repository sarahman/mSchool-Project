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

        <h1><acronym>New Question</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('questions/add') ?>" name="contactform" id="DataForm">

    <?php else : echo 'F'; ?>
    <?php endif ?>
            <fieldset>

                <legend>Please fill in the details about the question:</legend>

                <label for='Question'><span class='required'>*</span>Question</label>
                <textarea name='Question' id='Question' cols="" rows=""><?php echo set_value('Question') ?></textarea>
                <span class='note error'><?php echo form_error('Question') ?></span>

                <label for='AnsA'><span class='required'>*</span>AnsA</label>
                <textarea name='AnsA' id='AnsA' cols="" rows=""><?php echo set_value('AnsA') ?></textarea>
                <span class='note error'><?php echo form_error('AnsA') ?></span>

                <label for='AnsB'><span class='required'>*</span>AnsB</label>
                <textarea name='AnsB' id='AnsB' cols="" rows=""><?php echo set_value('AnsB') ?></textarea>
                <span class='note error'><?php echo form_error('AnsB') ?></span>

                <label for='AnsC'><span class='required'>*</span>AnsC</label>
                <textarea name='AnsC' id='AnsC' cols="" rows=""><?php echo set_value('AnsC') ?></textarea>
                <span class='note error'><?php echo form_error('AnsC') ?></span>

                <label for='AnsD'><span class='required'>*</span>AnsD</label>
                <textarea name='AnsD' id='AnsD' cols="" rows=""><?php echo set_value('AnsD') ?></textarea>
                <span class='note error'><?php echo form_error('AnsD') ?></span>

                <label for='CorrAns'><span class='required'>*</span>CorrAns</label>
                <select name="CorrAns" id='CorrAns' size="0">
                    <option value="1" <?php echo set_select('CorrAns', '1') ?>>A</option>
                    <option value="2" <?php echo set_select('CorrAns', '2') ?>>B</option>
                    <option value="3" <?php echo set_select('CorrAns', '3') ?>>C</option>
                    <option value="4" <?php echo set_select('CorrAns', '4') ?>>D</option>
                </select>
                <span class='note error'><?php echo form_error('CorrAns') ?></span>

                <label for='Explanation'><span class='required'>*</span>Explanation</label>
                <textarea name='Explanation' id='Explanation' cols=""
                          rows=""><?php echo $this->input->post('Explanation') ?></textarea>

                <label for='Image'><span class='required'>*</span>Image</label>
                <input name='Image' id='Image' value='<?php echo $this->input->post('Image') ?>' />

                <input name='QuizID' type='hidden' id='QuizID' />

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

<script type="text/javascript">
    (function ($) {
        $("#QuizID").val($("#QuizIDVal").val());
    })(jQuery);
</script>