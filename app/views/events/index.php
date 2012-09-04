<div id="main"><!-- InstanceBeginEditable name="Main" -->
    <div class="content">
        <div id="leftMain">
            <div id="NoteList" class="content-box">

                <ul>
                    <li><h2>Events List</h2></li>
                    <div id="EventListings">

                    </div>
                </ul>

            </div>
        </div>
        <div id="rightMain">
            <input name="IDVal" type="hidden" value="" id="IDVal" />

            <div id="EventLists" class="content-box">

                <div class="content-inner" id="detailItem">
                    <div class="title_border_nopadd">
                        <h1>Events Content</h1>

                        <div class="dash-sub-menu">
                            <ul>
                                <li><a class="active" href="<?php echo site_url('events/add') ?>" rel="facebox">
                                    <span><span>Add Event</span></span></a></li>

                                <li><a href="<?php echo site_url('events/confirmDelete') ?>" rel="facebox">
                                    <span><span>Delete Event</span></span></a></li>

                                <li><a href="javascript:updateRecord();"><span><span>Modify Event</span></span></a></li>
                            </ul>
                        </div>
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
    var ModAddress = "<?php echo site_url('events/update') ?>";
    var DeleteAddress = "<?php echo site_url('events/delete') ?>";
    var ViewAddress = "<?php echo site_url('events/view') ?>";
    var ListingView = "<?php echo site_url('events/get') ?>";
    var LisitngDiv = "#EventListings";
    var detailListing = "";
</script>