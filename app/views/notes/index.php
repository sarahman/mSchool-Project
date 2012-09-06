<div id="main"><!-- InstanceBeginEditable name="Main" -->
    <div class="content">
        <div id="leftMain">
            <div id="NoteList" class="content-box">

                <ul>
                    <li><h2>Notes List</h2></li>
                    <div id="NoteListings" class="listings">

                    </div>
                </ul>

            </div>
        </div>
        <div id="rightMain">
            <input name="IDVal" type="hidden" value="" id="IDVal" />

            <div id="NoteLists" class="content-box">

                <div class="content-inner" id="detailItem">
                    <div class="title_border_nopadd">
                        <h1>Notes Content</h1>

                        <div class="dash-sub-menu">
                            <ul>
                                <li><a class="active" href="<?php echo site_url('notes/add') ?>" rel="facebox">
                                    <span><span>Add Note</span></span></a></li>

                                <li><a href="<?php echo site_url('notes/confirmDelete') ?>" rel="facebox">
                                    <span><span>Delete Note</span></span></a></li>

                                <li><a href="javascript:updateRecord();"><span><span>Modify Note</span></span></a></li>
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
    var ModAddress = "<?php echo site_url('notes/update') ?>";
    var DeleteAddress = "<?php echo site_url('notes/delete') ?>";
    var ViewAddress = "<?php echo site_url('notes/view') ?>";
    var ListingView = "<?php echo site_url('notes/get') ?>";
    var LisitngDiv = "#NoteListings";
    var detailListing = "";
</script>