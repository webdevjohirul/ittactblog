<?php
    $posts = $objBlogApp->managePostPublic();

?>

<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <?php while($post = mysqli_fetch_assoc($posts)) { ?>
                <div class="item">
                    <img src="upload/<?php echo $post['post_img']; ?>" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="meta-category">
                                <span><?php echo $post['category_name']; ?></span>
                            </div>
                            <a href="single_post.php?view=postview&&id=<?php echo $post['post_id']; ?>">
                                <h4><?php echo $post['post_title']; ?></h4>
                            </a>
                            <ul class="post-info">
                                <li><a href="#"><?php echo $post['post_author']; ?></a></li>
                                <li><a href="#"><?php echo $post['post_date']; ?></a></li>
                                <li><a href="#"><?php echo $post['post_comment']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->