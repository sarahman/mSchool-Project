<div id="main"><!-- InstanceBeginEditable name="Main" -->
    <div class="content">
        <div id="leftMain">
            <div id="NotificationList" class="content-box">

                <ul>
                    <li><h2>Notifications</h2></li>
                    <div id="NotificationListings" class='listings'>

                    </div>
                </ul>

            </div>
        </div>
        <div id="rightMain">
            <input name="IDVal" type="hidden" value="" id="IDVal" />

            <div id="NotificationLists" class="content-box">

                <div class="content-inner" id="detailItem">
                    <div class="title_border_nopadd">
                        <h1>Notification Content</h1>
                    </div>

                    <form method="post" action="" name="frm-checkboxes" id="detailView">
                        <div id="detailViewContainer">

                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <br style="clear:both"/>

    <!-- InstanceEndEditable -->
</div>

<script src="<?php echo site_url('assets/js/AjaxCalls.js') ?>" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
    var AddAddress = "";
    var ModAddress = "<?php echo site_url('notifications/update') ?>";
    var DeleteAddress = "<?php echo site_url('notifications/delete') ?>";
    var ViewAddress = "<?php echo site_url('notifications/view') ?>";
    var ListingView = "<?php echo site_url('notifications/get') ?>";
    var LisitngDiv = "#NotificationListings";
    var detailListing = "";
</script>