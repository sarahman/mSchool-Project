<div id="navform">

<?php
if (empty($attachment)) : ?>

    <iframe src="<?php echo site_url('uploads/os8.pdf') ?>" width="100%" height="300px">
        <p>Your browser does not support iframes.</p>
    </iframe>

<?php else : ?>

    <iframe src="<?php echo site_url($attachment['Path']) ?>" width="100%" height="300px">
        <p><?php echo $attachment['Description'] ?></p>
    </iframe>

<?php endif; ?>

</div>