
<div id='navform'>

    <h1><acronym>New Quiz</acronym></h1>

    <p></p>

    <div id='message'></div>

    <form method='post' action='<?php echo site_url('quiz/add') ?>' name='contactForm' id='DataForm'>

        <fieldset>

            <legend>Please fill in the details about the quiz:</legend>

            <label for='Title'><span class='required'>*</span>Title</label>
            <input name='Title' type='text' id='Title' size='30' value='' maxlength=''/><br/>

            <label for='Description'><span class='required'>*</span>Description</label>
            <textarea name="Description" id='Description' cols="3" rows=""></textarea><br/>

            <label for='ExpiryDate'><span class='required'>*</span>Expiry Date</label>
            <input name='ExpiryDate' type='text' id='ExpiryDate' size='30' value='' maxlength=''/><br/>

            <label for='ExpiryTime'><span class='required'>*</span>Expiry Time</label>
            <input name='ExpiryTime' type='text' id='ExpiryTime' size='30' value='' maxlength=''/><br/>

            <label for='LecturerID'><span class='required'>*</span>LecturerID</label>
            <input name='LecturerID' type='text' id='LecturerID' size='30' value='1' maxlength=''/><br/>

            <label for='CategoryID'><span class='required'>*</span>CategoryID</label>
            <input name='CategoryID' type='text' id='CategoryID' size='30' value='' maxlength=''/><br/>

            <input type='submit' class='submit' id='submit' value='Add' />

        </fieldset>

    </form>

</div>