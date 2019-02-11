function registerAcc(){
    var first_name = document.getElementById('firstname').value;
    var last_name = document.getElementById('lastname').value;
    var e_mail = document.getElementById('email').value;
    var phone_number = document.getElementById('number').value;
    var user_name = document.getElementById('username').value;
    var pass_word = document.getElementById('password').value;
    var check_pass = document.getElementById('password_confirmation').value;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            window.location.href = "http://localhost/OJT/Bridge360Web/public/views/pages/home.php"; 
            $('#notification').fadeIn('fast', function(){
                $('#notifContent').text("Signed Up Successfully!").css('text-align', 'center');
                setTimeout(function(){
                    $('#notification').fadeOut('slow');
                }, 3000);
            });
        }
    };
    xhttp.open('POST', '../../assets/php/register_acc.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send("firstname="+first_name+"&lastname="+last_name+"&email="+e_mail+"&number="+phone_number+"&username="+user_name+"&password_1="+pass_word+"&password_2="+check_pass);
}

function login(){
    var email = document.getElementById('login_email').value;
    var password = document.getElementById('login_password').value;
    var xhttp  = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        var response = JSON.parse(xhttp.responseText);
        if(this.readyState == 4 && this.status == 200){
            if(response == "true"){
                window.location.href = "http://localhost/OJT/Bridge360Web/public/views/pages/projects.php"; 
            } else{
                $('#login_password').val("");
                $('#notification').fadeIn('fast', function(){
                    $('#notifContent').text("Wrong Password!").css('text-align', 'center');
                    setTimeout(function(){
                        $('#notification').fadeOut('slow');
                    }, 3000);
                });
            }
        }
    };
    xhttp.open('POST', '../../assets/php/login.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send("email="+email+"&password="+password);
}

function confirmEmail(){
    var email = document.getElementById('email').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        var response = JSON.parse(xhttp.responseText);
        if(this.readyState == 4 && this.status == 200){
            if(response == "false"){
                $('#invalidEmail').show();
                $('#email').val("");
            } else {
                $('#invalidEmail').hide();
            }
        }
    };
    xhttp.open('POST', '../../assets/php/checkEmail.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send("email="+email);
}

function confirmUserName(){
    var username = document.getElementById('username').value;
    if( username == "" || username.length == 0 ) {
        return false;
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        var response = JSON.parse(xhttp.responseText);
        if(this.readyState == 4 && this.status == 200){
            if(response == false){
                notifyUser( "fa fa-window-close", "Username already taken.", "danger" );
                $('#username').val("");
            } else {
                $('#invalidUname').hide();
            }
        }
    };
    xhttp.open('POST', '../../assets/php/checkUsername.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send("username="+username);
}