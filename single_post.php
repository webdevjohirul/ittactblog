<?php
include_once("admin/class/function.php");
$objBlogApp = new blogApp();

$getCategory = $objBlogApp->manageCategory();

if(isset($_GET['view'])){
    if($_GET['view'] = 'viewpost'){
        $id = $_GET['id'];
        $singlePost = $objBlogApp->editPost($id);
    }
}
?>

<?php include_once ("includes/header.php")?>

<?php include_once ("includes/banner.php")?>

<?php include_once ("includes/call_action.php")?>

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-post">
                    <div class="blog-thumb">
                        <img src="upload/<?php echo $singlePost['post_img']; ?>" alt="" height="500">
                    </div>
                    <div class="down-content">
                        <span><?php echo $singlePost['category_name']; ?></span>
                            <h4><?php echo $singlePost['post_title']; ?></h4>
                        <ul class="post-info">
                            <li><?php echo $singlePost['post_author']; ?></li>
                            <li><?php echo $singlePost['post_date']; ?></li>
                            <li><a href="#"><?php echo $singlePost['post_comment']; ?></a></li>
                        </ul>
                        <p><?php echo $singlePost['post_content']; ?></p>
                        <div class="post-options">
                            <div class="row">
                                <div class="col-6">
                                    <ul class="post-tags">
                                        <li><i class="fa fa-tags"></i></li>
                                        <li><a href="#"><?php echo $singlePost['post_tag']; ?></a>,</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="post-share">
                                        <li><i class="fa fa-share-alt"></i></li>
                                        <li><a href="#">Facebook</a>,</li>
                                        <li><a href="#"> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("includes/sidebar.php") ?>
        </div>
    </div>
</section>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<?php include_once ("includes/footer.php")?>
