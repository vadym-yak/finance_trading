$(document).ready(function() {
    $('a.login-window').click(function() {
        
                //Getting the variable's value from a link 
        var loginBox = $(this).attr('href');

        //Fade in the Popup
        $(loginBox).fadeIn(300);
        
        //Set the center alignment padding + border see css style
        var popMargTop = ($(loginBox).height() + 24) / 2; 
        var popMargLeft = ($(loginBox).width() + 24) / 2; 
        
        $(loginBox).css({ 
            'margin-top' : -popMargTop,
            'margin-left' : -popMargLeft
        });
        
        // Add the mask to body
        $('body').append('<div id="mask"></div>');
        $('#mask').fadeIn(300);
        
        return false;
    });

    // When clicking on the button close or the mask layer the popup closed
    $('a.close, #mask').live('click', function() { 
        $('#mask , .login-popup').fadeOut(300 , function() {
            $('#mask').remove();  
        }); 
        return false;
    });

    $("#signin_btn").live("click", function(evt){
        console.log($("#username").val(),$("#password").val());
        $.ajax({
            url: 'include/login_register.php',
            type: 'post',
            data: {
                'type': 'signin',
                'username': $("#username").val(),
                'password': $("#password").val()
            },
            success: function(res) {
                console.log(res);
                location.reload();
            }, 
            failure: function(err) {
                console.log(err);
            }
        })
    });

    $("#signup_btn").live("click", function(evt){
        console.log($("#up-username").val(),$("#up-password").val(), $("#up-email").val());
        $.ajax({
            url: 'include/login_register.php',
            type: 'post',
            data: {
                'type': 'signup',
                'username': $("#up-username").val(),
                'password': $("#up-password").val(),
                'email': $("#up-email").val()
            },
            success: function(res) {
                console.log(res);
                location.reload();
            }, 
            failure: function(err) {
                console.log(err);
            }
        });
    });

    $("#logout_btn").live('click', function(evt) {
        console.log('dddd');
        $.ajax({
            url: 'include/login_register.php',
            type: 'post',
            data: {
                'type': 'logout',
            },
            success: function(res) {
                console.log(res);
                location.reload();
            }
        });
    });
});