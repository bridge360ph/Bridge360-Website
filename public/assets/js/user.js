const registerAccount = () => {
    var account = {
        firstName : document.forms["frmRegister"]["firstName"].value,
        lastName : document.forms["frmRegister"]["lastName"].value,
        email : document.forms["frmRegister"]["email"].value,
        phoneNumber : document.forms["frmRegister"]["phoneNumber"].value,
        username : document.forms["frmRegister"]["username"].value,
        password : document.forms["frmRegister"]["password_1"].value,
        password_2 : document.forms["frmRegister"]["password_2"].value
    };

    if( account.password != account.password_2 ) {
        notifyUser( `fa fa-window-close`, `Passwords do not match.`, `danger` );
        return false;
    }
    
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../../assets/php/registerAccount.php",
        "method": "POST",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "cache-control": "no-cache",
          "Postman-Token": "966b2ceb-4be7-470f-b281-cad787e04ecd"
        },
        "data": {
          "firstName": toTitleCase( account.firstName ),
          "lastName": toTitleCase( account.lastName ),
          "email": account.email,
          "phoneNumber": account.phoneNumber,
          "username": account.username,
          "password": account.password
        }
      }
      
    $.ajax( settings )
        .success( ( response ) => {            
            var responseObj = JSON.parse( response );
            
            if( responseObj.error ) {
                if( Array.isArray( (responseObj.data.message) ) ) {
                    var messagesHTML = ``;

                    messagesHTML += `<ul>`;
                    (responseObj.data.message).forEach( ( message ) => {
                        messagesHTML += `<li>${message}</li>`;
                    } );
                    messagesHTML += `</ul>`;
                    
                    notifyUser( `fa fa-window-close`, `${messagesHTML}`, `danger` );
                } else {
                    notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                }
            } else {
                notifyUser( `fa fa-check`, `Account registration is successful.`, `success` );
                setTimeout(function(){
                    window.location.href = "../../views/pages/home.php";             
                }, 3000);
            }
        } )
        .fail( ( response ) => {
            var responseObj = JSON.parse( response );

            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
            } else {
                notifyUser( `fa fa-window-close`, `Something went wrong. Please try again later.`, `danger` );
            }
        } );

    return false;
};

const loginAccount = () => {
    var account = {
        email : document.forms["frmLogin"]["email"].value,
        password : document.forms["frmLogin"]["password"].value
    };

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../../assets/php/loginAccount.php",
        "method": "POST",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "cache-control": "no-cache",
          "Postman-Token": "55af14cc-08fd-45d3-bee7-d176ed1d857c"
        },
        "data": {
          "email": account.email,
          "password": account.password
        }
      }
      
    $.ajax( settings )
        .success( ( response ) => {            
            var responseObj = JSON.parse( response );
            
            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
            } else {
                // notifyUser( `fa fa-check`, `${responseObj.data.message}`, `success` );
                var notify = $.notify(
                    `Logging in...`,
                    {
                        type: `success`,
                        allow_dismiss: false,
                        showProgressBar: true
                    }
                );

                setTimeout(function(){
                    notify.update( `message`, responseObj.data.message );           
                }, 2000);
                setTimeout(function(){
                    window.location.href = "../../views/pages/home.php";  
                }, 1000);
            }
        } )
        .fail( ( response ) => {
            var responseObj = JSON.parse( response );

            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
            } else {
                notifyUser( `fa fa-window-close`, `Something went wrong. Please try again later.`, `danger` );
            }
        } );

    return false;
};

const logoutAccount = () => {
    window.location.href = "../../assets/php/logoutAccount.php";
};

const confirmEmail = () => {
    var emailEl = document.forms["frmRegister"]["email"];

    if( emailEl.value === "" ) {
        return false;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../../assets/php/checkEmail.php",
        "method": "POST",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "cache-control": "no-cache",
          "Postman-Token": "ddaaff6c-7c12-4b16-81d6-b2b934b7eaa7"
        },
        "data": {
          "email": emailEl.value
        }
      };
      
    $.ajax( settings )
        .success( ( response ) => {            
            var responseObj = JSON.parse( response );
            
            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                emailEl.value = null;
            } else {
                if( responseObj.data.isValidEmail ) {
                    // notifyUser( `fa fa-check`, `Email is valid.`, `success` );                
                } else {
                    notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                    emailEl.value = null;
                }
            }
        } )
        .fail( ( response ) => {
            var responseObj = JSON.parse( response );

            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                emailEl.value = null;
            } else {
                notifyUser( `fa fa-window-close`, `Something went wrong. Please try again later.`, `danger` );
                emailEl.value = null;
            }
        } );
};

const confirmUsername = () => {
    var usernameEl = document.forms["frmRegister"]["username"];

    if( usernameEl.value === "" ) {
        return false;
    }

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "../../assets/php/checkUsername.php",
        "method": "POST",
        "headers": {
          "Content-Type": "application/x-www-form-urlencoded",
          "cache-control": "no-cache",
          "Postman-Token": "ddaaff6c-7c12-4b16-81d6-b2b934b7eaa7"
        },
        "data": {
          "username": usernameEl.value
        }
      };
      
    $.ajax( settings )
        .success( ( response ) => {
            var responseObj = JSON.parse( response );
            
            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                usernameEl.value = null;
            } else {
                if( responseObj.data.isValidUsername ) {
                    // notifyUser( `fa fa-check`, `Username is valid.`, `success` );                
                } else {
                    notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                    usernameEl.value = null;
                }
            }
        } )
        .fail( ( response ) => {
            var responseObj = JSON.parse( response );

            if( responseObj.error ) {
                notifyUser( `fa fa-window-close`, `${responseObj.data.message}`, `danger` );
                usernameEl.value = null;
            } else {
                notifyUser( `fa fa-window-close`, `Something went wrong. Please try again later.`, `danger` );
                usernameEl.value = null;
            }
        } );
};