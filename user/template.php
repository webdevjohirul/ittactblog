<?php
    include("class/function.php");
    $objBlogApp = new blogApp();

    //logout session
    session_start();
    if(!$_SESSION['userEmail']){
        header("location: index.php");
    }

    //admin logout
    if(isset($_GET['userlogout'])){
        if($_GET['userlogout'] == 'logout'){
            $objBlogApp->userLogout();
        }
    }

?>

<?php include_once("includes/header.php") ?>

    <body class="sb-nav-fixed">
        <?php include_once("includes/topnav.php") ?>
        <div id="layoutSidenav">
            <?php include_once("includes/sidenav.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php
                            if(isset($view)){
                                if($view=='dashboard'){
                                    include("view/dashboard_view.php");
                                }elseif($view=='add_post'){
                                    include("view/add_post_view.php");
                                }elseif($view=='manage_post'){
                                    include("view/manage_post_view.php");
                                }elseif($view=='user_profile'){
                                    include("view/user_profile_view.php");
                                }elseif($view=='activity_log'){
                                    include("view/activity_log_view.php");
                                }
                            }
                        ?>
                    </div>
                </main>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<?php include_once("includes/footer.php") ?>
