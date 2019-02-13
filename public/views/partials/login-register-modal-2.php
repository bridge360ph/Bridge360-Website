<!-- Login Modal -->
<div class="modal fade login" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true" z-index="9999">
    
    <div class="modal-dialog modal-dialog-centered login animated" role="document">
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
            </div>

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

        </div>
    </div>
    
</div>