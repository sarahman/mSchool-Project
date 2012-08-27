// JavaScript Document

var AddAddress="";
var ModAddress="";
var DeleteAddress="";
var ViewAddress="";
var ListingView="";
var LisitngDiv="";

function updateDiv(box, url)
{
    $(box).load(url);

}


function updateListings()
{

    updateDiv(LisitngDiv,ListingView);

}

function updateDetailView(ID)
{
    if(ID=="")
    {
        ID=getID();
    }

    if(detailListing=="")
    {
        updateID(ID);
        updateDiv("#detailViewContainer",ViewAddress+"?ID="+ID);
    }
    else
    {
        updateID(ID);
        updateDiv(detailListing,ViewAddress+"?ID="+ID);
    }

}


function viewRec()
{

    ID=getID();

    jQuery.facebox({ ajax: ViewAddress+'?normal=1&ID='+ID});

}


function updateID(ID)
{
    $('#IDVal').val(ID);
}

function getID()
{
    return $('#IDVal').val();

}

function refreshAll()
{
     updateListings();
     updateDetailView();
}

jQuery(document).ready(function($) {
    refreshAll();
})

function delRec()
{
            $('#facebox .content').load(DeleteAddress+'&ID='+getID(), function() {
                    refreshAll();
            });
}


function updateRecord()
{
    jQuery.facebox({ ajax: ModAddress+'?ID='+getID()});

}