<?php
    $posts = $objBlogApp->managePostPublic();

?>

<div class="col-lg-12">
    <div class="sidebar-item recent-posts">
        <div class="sidebar-heading">
            <h2>Recent Posts</h2>
        </div>
        <div class="content">
            <ul>
                <?php while($post = mysqli_fetch_assoc($posts)) { ?>
                    <li><a href="post-details.html">
                            <h5><?php echo $post['post_title']; ?></h5>
                            <span><?php echo $post['post_date']; ?></span>
                        </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>