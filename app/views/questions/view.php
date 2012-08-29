    <div id="navform">

        <h1><acronym>Update Questions</acronym></h1>

        <p></p>

        <div id="message"></div>

        <form method="post" action="<?php echo site_url('questions/update') ?>" name="contactform" id="DataForm">

            <fieldset>

                <legend>Question Detail:</legend>

                <label for='QuesID'><span class='required'>*</span>QuesID</label>
                <input name='QuesID' type='text' id='QuesID' size='30' value='<?php echo $question['QuesID'] ?>' />

                <label for='Question'><span class='required'>*</span>Question</label>
                <input name='Question' type='text' id='Question' size='30' value='<?php echo $question['Question'] ?>' />

                <label for='AnsA'><span class='required'>*</span>AnsA</label>
                <input name='AnsA' type='text' id='AnsA' size='30' value='<?php echo $question['AnsA'] ?>' />

                <label for='AnsB'><span class='required'>*</span>AnsB</label>
                <input name='AnsB' type='text' id='AnsB' size='30' value='<?php echo $question['AnsB'] ?>' />

                <label for='AnsC'><span class='required'>*</span>AnsC</label>
                <input name='AnsC' type='text' id='AnsC' size='30' value='<?php echo $question['AnsC'] ?>' />

                <label for='AnsD'><span class='required'>*</span>AnsD</label>
                <input name='AnsD' type='text' id='AnsD' size='30' value='<?php echo $question['AnsD'] ?>' />

                <label for='CorrAns'><span class='required'>*</span>CorrAns</label>
                <input name='CorrAns' type='text' id='CorrAns' size='30' value='<?php echo $question['CorrAns'] ?>' />

                <label for='Explanation'><span class='required'>*</span>Explanation</label>
                <textarea name="Explanation" type='text' id='Explanation' cols=""
                          rows=""><?php echo $question['Explanation'] ?></textarea>

                <label for='Image'><span class='required'>*</span>Image</label>
                <input name='Image' type='text' id='Image' size='30' value='<?php echo $question['Image'] ?>' />

                <label for='QuizID'><span class='required'>*</span>QuizID</label>
                <input name='QuizID' type='text' id='QuizID' size='30' value='<?php echo $question['QuizID'] ?>' />

                <div class='form-buttons'>
                    <input type='button' class='submit' id='pop-out' value='OK' />
                    <input type='button' class='submit' id='edit-button' value='Edit'
                           rel='<?php echo $question['QuesID'] ?>' />
                </div>

            </fieldset>

        </form>

    </div>