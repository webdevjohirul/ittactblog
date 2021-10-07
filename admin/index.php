<?php
    include "class/function.php";
    $objBlogApp = new blogApp();

    //admin login
    if (isset($_POST['admin_login'])) {
        $objBlogApp->adminLogin($_POST);
    }

    //login session
    session_start();
    if (isset($_SESSION['adminEmail'])) {
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
                                    <h3 class="text-center font-weight-light my-4">Admin Login</h3>
                                </div>
                                <div class="card-body">

                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="admin_email">Email</label>
                                            <input name="admin_email" class="form-control py-4" id="admin_email"
                                                type="email" placeholder="admin@gmail.com" required />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="admin_pass">Password</label>
                                            <input name="admin_pass" class="form-control py-4" id="admin_pass"
                                                type="password" placeholder="1234" required />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember
                                                    password</label>
                                            </div>
                                        </div>
                                        <div
                                            class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="forgot_password.php">Forgot Password?</a>
                                            <input name="admin_login" class="btn btn-primary" type="submit"
                                                value="Login">
                                        </div>
                                    </form>

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