(function ($) {

    $('#navform #DataForm').live('submit', function () {

        var action = $(this).attr('action');

        $("#navform #message").slideUp(750, function () {
            $('#navform #message').hide();

            $('#navform #submit')
                .attr('disabled', 'disabled');

            $('#navform #pop-out')
                .after('<img src="assets/images/ajax-loader.gif" class="loader" />')

            $.post(action, $("#navform #DataForm").serialize(),
                function (data) {
                    data = $.trim(data);
                    var datalen = data.length;
                    var part = data.substr(0, 1);
                    if ($.trim(part) == 'F') {
                        data = data.substr(1, datalen);
                        $('#navform').fadeOut('slow', function () {
                            $('#navform #DataForm').html(data);
                            $('#navform').fadeIn('slow');
                        });
                    }
                    else {
                        $('#navform #message').html(data);
                        $('#navform #message').slideDown('slow');
                        $('#navform span.error').remove();
                        $('#navform #DataForm img.loader').fadeOut('slow', function () {
                            $(this).remove()
                        });
                        $('#navform #DataForm #submit').attr('disabled', '');
                        $('#navform #DataForm #pop-out').attr('value', 'OK');
                        if (data.match('success') != null) $('#navform #DataForm').slideUp('slow');
                    }
                }
                , "html");

        });

        return false;

    });

    $('#navform #DataForm #pop-out').live('click', function() {
        $('.popup a.close').trigger('click');
    });

    $('#navform #DataForm #edit-button').live('click', function() {
        updateQues($(this).attr('rel'));
    });

})(jQuery);