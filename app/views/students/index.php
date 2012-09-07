<div id="main"><!-- InstanceBeginEditable name="Main" -->
    <div class="content">
        <div id="leftMain">
            <div id="StudentList" class="content-box">

                <ul>
                    <li><h2>Students List</h2></li>
                    <div id="StudentListings" class="listings">

                    </div>
                </ul>

            </div>
        </div>
        <div id="rightMain">
            <input name="IDVal" type="hidden" value="" id="IDVal" />

            <div id="StudentLists" class="content-box">

                <div class="content-inner" id="detailItem">
                    <div class="title_border_nopadd">
                        <h1>Student Management</h1>

                        <div class="dash-sub-menu">
                            <ul>
                                <li><a class="active" href="<?php echo site_url('students/add') ?>" rel="facebox">
                                    <span><span>Add Student</span></span></a></li>

                                <li><a href="<?php echo site_url('students/confirmDelete') ?>" rel="facebox">
                                    <span><span>Delete Student</span></span></a></li>

                                <li><a href="javascript:updateRecord();"><span><span>Modify Student</span></span></a></li>
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
    var ModAddress = "<?php echo site_url('students/update') ?>";
    var DeleteAddress = "<?php echo site_url('students/delete') ?>";
    var ViewAddress = "<?php echo site_url('students/view') ?>";
    var ListingView = "<?php echo site_url('students/get') ?>";
    var LisitngDiv = "#StudentListings";
    var detailListing = "";
</script>