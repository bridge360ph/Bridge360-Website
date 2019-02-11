/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register with');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login with');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');   
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}



// ERROR CHECKING AND NOTIFS
$(document).ready(function(){
    //check if both passwords match when registering
    $('#password_confirmation').blur( function(){
        if( $('#password').val() != $('#password_confirmation').val() ){
            notifyUser( `fa fa-window-close`, `Passwords do not match.`, `danger` );

            $('#password_confirmation').val("");
            $('#registerBtn').prop('disabled', true);
        } else {
            $('#registerBtn').prop('disabled', false);   
        }
    });

    //hides the error
    // $('#password_confirmation').focus(function(){
    //     $('#wrongPass').hide();
    // });

    $('#password').keyup(function(){
        if($('#password').val() == ""){
            $('#password_confirmation').prop('disabled', true);
        } 
        else if($('#password').val() != ""){
            $('#password_confirmation').prop('disabled', false);
        }
    });

    $(`input[type=text], input[type=number], input[type=email], input[type=password]`).blur( () => {
        if($('#firstname').val() == "" || $('#lastname').val() == "" || $('#email').val() == "" || $('#number').val() == "" || $('#username').val() == "" || $('#password').val() == "" || $('#password_confirmation').val() == ""){
            notifyUser( `fa fa-exclamation`, `All fields are required.`, `warning` );
            $('#registerBtn').prop('disabled', true);
        }
    } );

    // $('#email').focus(function(){
    //     $('#invalidEmail').hide();
    // });

    // $('#username').focus(function(){
    //     $('#invalidUname').hide();
    // });

});//end