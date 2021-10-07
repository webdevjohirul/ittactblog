<?php
    include "class/function.php";
    $objBlogApp = new blogApp();

    //user login
    if (isset($_POST['user_login'])) {
        $objBlogApp->userLogin($_POST);
    }

    //login session
    session_start();
    if (isset($_SESSION['userEmail'])) {
        header("location: dashboard.php");
    }

?>

<?php include_once "includes/header.php"?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">User Login</h3>
                                </div>
                                <div class="card-body">

                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="user_email">Email</label>
                                            <input name="user_email" class="form-control py-4" id="user_email"
                                                type="email" placeholder="user@gmail.com" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="user_pass">Password</label>
                                            <input name="user_pass" class="form-control py-4" id="user_pass"
                                            type="password" placeholder="123" required />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="forgot_password.php">Forgot Password?</a>
                                            <input name="user_login" class="btn btn-info" type="submit" value="Login">
                                        </div>
                                    </form>

                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            
<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<?php include_once "includes/footer.php"?>