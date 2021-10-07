<?php
    $posts = $objBlogApp->managePostPublic();

?>

<div class="col-lg-12">
    <div class="sidebar-item tags">
        <div class="sidebar-heading">
            <h2>Tag Clouds</h2>
        </div>
        <div class="content">
            <ul>
                <?php while($post = mysqli_fetch_assoc($posts)) { ?>
                    <li><a href="#"><?php echo $post['post_tag']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>