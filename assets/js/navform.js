$(document).ready(function(){

    $('#navform #DataForm').submit(function(){

        var action = $(this).attr('action');

        $("#navform #message").slideUp(750,function() {
        $('#navform #message').hide();

         $('#navform #submit')
            .after('<img src="images/ajax-loader.gif" class="loader" />')
            .attr('disabled','disabled');

        $.post(action,$("#navform #DataForm").serialize() ,
            function(data){
                data=$.trim(data);
                var datalen=data.length;
                var part=data.substr(0, 1);
                if(jQuery.trim(part )=='F')
                {
                    data=data.substr(1,datalen);
                    $('#navform').fadeOut('slow',function() {
                            $('#navform').html(data);
                            $('#navform').fadeIn('slow');
                    });
                }
                else
                {
                    //document.getElementById('message').innerHTML = data;
                    $('#navform #message').html(data);
                    $('#navform #message').slideDown('slow');
                    $('#navform #DataForm img.loader').fadeOut('slow',function(){$(this).remove()});
                    $('#navform #DataForm #submit').attr('disabled','');
                    if(data.match('success') != null) $('#navform #DataForm').slideUp('slow');
                }
            }
        ,"html");

        });

        return false;

    });

});



