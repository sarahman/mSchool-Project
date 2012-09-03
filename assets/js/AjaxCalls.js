// JavaScript Document

var AddAddress = "";
var ModAddress = "";
var DeleteAddress = "";
var ViewAddress = "";
var ListingView = "";
var LisitngDiv = "";
var detailListing = "";

function getID()
{
    return $('#IDVal').val();
}

function updateID(ID)
{
    $('#IDVal').val(ID);
}

function updateListings()
{
    updateDiv(LisitngDiv, ListingView);
}

function updateDiv(box, url)
{
    $(box).load(url);
}

function updateDetailView(ID)
{
    if (ID == "") {
        ID = getID();
    }

    if (detailListing == "") {
        updateID(ID);
        updateDiv("#detailViewContainer", ViewAddress+"/id/"+ID);
    } else {
        updateID(ID);
        updateDiv(detailListing, ViewAddress+"/id/"+ID);
    }
}

function viewRec()
{
    jQuery.facebox({ ajax: ViewAddress+'/id/'+getID()});
}

function refreshAll()
{
     updateListings();
     updateDetailView();
}

function delRec()
{
    $('#facebox .content').load(DeleteAddress+'/id/'+getID(), function() {
        refreshAll();
    });
}

function updateRecord()
{
    jQuery.facebox({ ajax: ModAddress+'/id/'+getID()});
}

jQuery(document).ready(function($) {
    refreshAll();
})