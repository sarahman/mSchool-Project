<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>RBS CI Version</title>

        <style type="text/css" media="all">
            @import url("<?php echo site_url('assets/css/style.css'); ?>");
        </style>

        <script type="text/javascript" src="<?php echo site_url('assets/js/jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo site_url('assets/js/app.js') ?>"></script>

    </head>

    <body>

        <div id="hld">                    <!-- #hld begins -->

            <div class="wrapper">        <!-- #wrapper begins -->

                <div id="header">        <!-- #header begins -->

                </div>                    <!-- #header ends -->

                <?php if (!empty($notification['message'])) : ?>

                <div class="block message-block">

                    <div class="message <?php echo $notification['messageType'] ?>" style="display: block;">
                        <p><?php echo $notification['message'] ?></p>
                    </div>

                </div>

                <?php endif ?>

                <?php echo $content_for_layout ?>

                <div id="footer">        <!-- #footer begins -->

                    <p class="left">powered by <a href="http://www.rightbrainsolution.com/">Right Brain Solution Ltd.</a></p>

                </div>                    <!-- #footer ends -->

            </div>                        <!-- #wrapper ends -->

        </div>                            <!-- #hld ends -->

    </body>
</html>