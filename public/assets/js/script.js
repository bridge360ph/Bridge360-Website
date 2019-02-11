// $(document).ready(function(){
//     //check if both passwords match when registering
//     $('#password_confirmation').blur(function(){
//         if($('#password').val() != $('#password_confirmation').val()){
//             $('#wrongPass').show();
//             $('#password_confirmation').val("");
//             $('#registerBtn').prop('disabled', true);
//         } else {
//             $('#registerBtn').prop('disabled', false);   
//         }
//     });

//     //hides the error
//     $('#password_confirmation').focus(function(){
//         $('#wrongPass').hide();
//     });

//     if($('#password').val() == ""){
//         $('#password_confirmation').prop('disabled', true);
//     } 
    
//     $('#password').keyup(function(){
//         if($('#password').val() != ""){
//             $('#password_confirmation').prop('disabled', false);
//         }
//     });

//     if($('#firstname').val() == "" || $('#lastname').val() == "" || $('#email').val() == "" || $('#number').val() == "" || $('#username').val() == "" || $('#password').val() == "" || $('#password_confirmation').val() == ""){
//         $('#registerBtn').prop('disabled', true);
//     }

//     $('#firstname').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#lastname').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#email').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#number').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#username').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#password_confirmation').keyup(function(){
//         if($('#firstname').val() != "" && $('#lastname').val() != "" && $('#email').val() != "" && $('#number').val() != "" && $('#username').val() != "" && $('#password').val() != "" && $('#password_confirmation').val() != ""){
//             $('#registerBtn').prop('disabled', false);
//         } else {
//             $('#registerBtn').prop('disabled', true);
//         }
//     });

//     $('#email').focus(function(){
//         $('#invalidEmail').hide();
//     });

//     $('#username').focus(function(){
//         $('#invalidUname').hide();
//     });

// });//end

