
<link href='<?php echo site_url('assets/css/jquery-ui-1.8.7.custom.css') ?>' rel='stylesheet' />

<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.core.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.timepicker-0.0.6.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.ui.datepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/navform.js') ?>"></script>
<script type="text/javascript">
    (function ($) {
        $('#ExpiryTime').timepicker();
        $("#ExpiryDate").datepicker({ dateFormat:'d-m-yy' });
    })(jQuery);
</script>

    <?php
        foreach ($quiz as $items) {
            echo "<li><a href='javascript:updateQuestions(\"{$items['QuizID']}\")'>&#187;{$items['Title']}</a></li>";
        }

        $this->load->view('quiz/form');