$(document).ready(function(){

    $('#contactform').submit(function(){

        var action = $(this).attr('action');

        $("#message").slideUp(750,function() {
        $('#message').hide();

         $('#submit')
            .after('<img src="assets/ajax-loader.gif" class="loader" />')
            .attr('disabled','disabled');

        $.post(action, {
            ans: $("input[name='AnsGroup']:checked").val(),
            id: $('#id').val(),
            ques:  $('#quesid').val(),
            name: $('#name').val(),
            address: $('#address').val(),
            phone: $('#phone').val(),
            homephone: $('#homephone').val(),
        },
            function(data){
                data=$.trim(data);
                var datalen=data.length;
                var part=data.substr(0, 1);
                if(jQuery.trim(part )=='F')
                {
                    data=data.substr(1,datalen);
                    $('#contact').fadeOut('slow',function() {
                            $('#contact').html(data);
                            $('#contact').fadeIn('slow');
                    });
                }
                else
                {
                    //document.getElementById('message').innerHTML = data;
                    $('#message').html(data);
                    $('#message').slideDown('slow');
                    $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
                    $('#contactform #submit').attr('disabled','');
                    if(data.match('success') != null) $('#contactform').slideUp('slow');
                }
            }
        ,"html");

        });

        return false;

    });

});