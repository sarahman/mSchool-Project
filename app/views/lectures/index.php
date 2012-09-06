<div id="main"><!-- InstanceBeginEditable name="Main" -->
    <div class="content">
        <div id="leftMain">
            <div id="LectureList" class="content-box">

                <ul>
                    <li><h2>Lectures List</h2></li>
                    <div id="LectureListings" class="listings">

                    </div>
                </ul>

            </div>
        </div>
        <div id="rightMain">

            <input name="IDVal" type="hidden" value="" id="IDVal"/>
            <div id="QuestionLists" class="content-box">

                <div class="content-inner" id="detailItem">
                    <form method="post" action="" name="frm-checkboxes" id="detailView">
                        <div id="viewByOption">

                        </div>
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
    var ModAddress = "<?php echo site_url('lectures/update') ?>";
    var DeleteAddress = "<?php echo site_url('lectures/delete') ?>";
    var ViewAddress = "<?php echo site_url('lectures/view') ?>";
    var ListingView = "<?php echo site_url('lectures/get') ?>";
    var LisitngDiv = "#LectureListings";
    var detailListing = "";

    function updateViewByOption(ID) {
        if (ID == "") {
            ID = getID();
        }

        updateID(ID);
        updateDiv("#viewByOption", "<?php echo site_url('lectures/getByWeek') ?>" + "/id/" + ID);
    }

</script>