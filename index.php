<?php
include_once("admin/class/function.php");
$objBlogApp = new blogApp();

$getCategory = $objBlogApp->manageCategory();

?>

<?php include_once ("includes/header.php")?>

<?php include_once ("includes/banner.php")?>

<?php include_once ("includes/call_action.php")?>

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <?php include_once("includes/blogpost.php") ?>
            <?php include_once("includes/sidebar.php") ?>
        </div>
    </div>
</section>

<?php include_once ("includes/footer.php")?>