<?php
include "class/function.php";
$objBlogApp = new blogApp();

//admin login
if (isset($_POST['user_sign_up'])) {
   $signUpMsg = $objBlogApp->userSignUp($_POST);
}

//admin sesstion
session_start();
if (isset($_SESSION['userEmail'])) {
    header("location: dashboard.php");
}

?>

<?php include_once("includes/header.php") ?>

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">

                                        <form action="" method="post">
                                        <h2 class="text-success"><?php if(isset($signUpMsg)){echo $signUpMsg;} ?></h2>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="first_name">First Name</label>
                                                        <input name="first_name" class="form-control py-4" id="first_name" type="text" placeholder="Enter first name" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="last_name">Last Name</label>
                                                        <input name="last_name" class="form-control py-4" id="last_name" type="text" placeholder="Enter last name" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="email_address">Email</label>
                                                <input name="email_address" class="form-control py-4" id="email_address" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="password">Password</label>
                                                        <input name="password" class="form-control py-4" id="password" type="password" placeholder="Enter password" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="passwordConfirm">Confirm Password</label>
                                                        <input name="passwordConfirm" class="form-control py-4" id="passwordConfirm" type="password" placeholder="Confirm password" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                                <input class="btn btn-primary btn-block" type="submit" name="user_sign_up" value="Sign Up">
                                            </div>
                                        </form>

                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<?php include_once("includes/footer.php") ?>