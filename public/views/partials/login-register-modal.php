<div class="modal fade login" id="loginModal" style="z-index: 999999;">
    <div class="modal-dialog login animated">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                
            </div><!-- .modal-header -->

            <div class="modal-body">  
                <div class="box">
                    <div class="content">
                        <div class="social">
                            <a class="circle github" href="/auth/github" style="width:60px;height: 60px;"> 
                                <i class="fa fa-user fa-fw"></i>
                            </a>                                
                        </div>

                        <div class="division">
                            <div class="line l"></div>
                            <span></span>
                            <div class="line r"></div>
                        </div>

                        <div class="error"></div>

                        <div class="form loginBox">
                            <form class="form" name="frmLogin" onsubmit="return loginAccount();">    
                                <input id="login_email" class="form-control" type="text" placeholder="Email" name="email">
                                <input id="login_password" class="form-control" type="password" placeholder="Password" name="password">
                                <button id="loginBtn" class="btn btn-default btn-login" type="submit">Login</button>                                
                            </form>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <form class="form" name="frmRegister" onsubmit="return registerAccount();">    
                            <input id="firstname" class="form-control" type="text" placeholder="First name" name="firstName">
                            <input id="lastname" class="form-control" type="text" placeholder="Last name" name="lastName">
                            <input id="email" class="form-control" type="text" placeholder="Email" name="email" onblur="confirmEmail()">
                            
                            <input id="number" class="form-control" type="text" placeholder="Mobile number" name="phoneNumber">
                            <input id="username" class="form-control" type="text" placeholder="Username" name="username" onblur="confirmUsername()">
                            
                            <input id="password" class="form-control" type="password" placeholder="Password" name="password_1">
                            <input id="password_confirmation" class="form-control" type="password" placeholder="Retype Password" name="password_2">
                            <button id="registerBtn" class="btn btn-default btn-register" type="submit">Create Account </button>
                        </form>
                    </div>
                </div>
            </div><!-- .modal-body -->

            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>Looking to 
                        <a href="javascript: showRegisterForm();">Create an account</a>
                    ?</span>
                </div>

                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
                </div>
            </div><!-- .modal-footer -->

        </div><!-- .modal-content -->
    </div><!-- .modal-footer -->
</div><!-- .modal.fade.login -->