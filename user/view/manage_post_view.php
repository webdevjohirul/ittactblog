<?php
    $viewAllPost = $objBlogApp->managePost();

?>


<div class="shadow p-3 m-3">
    <h2 class="text-primary">Manage post</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Post title</th>
                <th>Post category</th>
                <th>Post tag</th>
                <th>Post img</th>
                <th>Post author</th>
                <th>Post date</th>
                <th>Post status
                    <a href="manage_post.php">Refresh</a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php while($viewPost= mysqli_fetch_assoc($viewAllPost)){ ?>
            <tr>
                <td><?php echo $viewPost['post_id']; ?></td>
                <td><?php echo $viewPost['post_title']; ?></td>
                <td><?php echo $viewPost['category_name']; ?></td>
                <td><?php echo $viewPost['post_tag']; ?></td>
                <td>
                    <img src="../upload/<?php echo $viewPost['post_img']; ?>" alt="not found" height="100" width="100"
                        title="<?php echo $viewPost['post_img']; ?>">
                </td>
                <td><?php echo $viewPost['post_author']; ?></td>
                <td><?php echo $viewPost['post_date']; ?></td>
                <td>
                    <?php if($viewPost['post_status'] == 1){
                            echo "Publish";
                        }else{
                            echo "Unpublish";
                        } 
                        ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

    <a class="btn btn-info" href="add_post.php">Add post</a>
</div>