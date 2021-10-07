<?php
    include("class/function.php");
    $objBlogApp = new blogApp();

    //logout session
    session_start();
    if(!$_SESSION['adminEmail']){
        header("location: index.php");
    }

    //admin logout
    if(isset($_GET['adminlogout'])){
        if($_GET['adminlogout'] == 'logout'){
            $objBlogApp->adminLogout();
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
                                }elseif($view=='add_category'){
                                    include("view/add_category_view.php");
                                }elseif($view=='add_page'){
                                    include("view/add_page_view.php");
                                }elseif($view=='add_post'){
                                    include("view/add_post_view.php");
                                }elseif($view=='manage_category'){
                                    include("view/manage_category_view.php");
                                }elseif($view=='manage_page'){
                                    include("view/manage_page_view.php");
                                }elseif($view=='manage_post'){
                                    include("view/manage_post_view.php");
                                }elseif($view=='edit_category'){
                                    include("view/edit_category_view.php");
                                }elseif($view=='edit_post'){
                                    include("view/edit_post_view.php");
                                }elseif($view=='edit_img'){
                                    include("view/edit_img_view.php");
                                }elseif($view=='admin_profile'){
                                    include("view/admin_profile_view.php");
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
