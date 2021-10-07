<?php
    $viewAllPost = $objBlogApp->managePost();

    if(isset($_POST['update_img_submit'])){
        $updateImg = $objBlogApp->updateImg($_POST);
    }
    if(isset($_POST['update_post_submit'])){
        $updateMsg = $objBlogApp->updatePost($_POST);
    }
    
    if(isset($_GET['status'])){
        if($_GET['status'] = 'delete');
        $id = $_GET['id'];
        $deleteMsg = $objBlogApp->deletePost($id);
    }
?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->


<div class="shadow p-3 m-3">
    <h2 class="text-primary">Manage post</h2>
    <table class="table table-hover">
        <h4 class="text-success"><?php if(isset($updateImg)){ echo $updateImg;} ?></h4>
        <h4 class="text-success"><?php if(isset($updateMsg)){ echo $updateMsg;} ?></h4>
        <h4 class="text-success"><?php if(isset($deleteMsg)){ echo $deleteMsg;} ?></h4>
        <thead>
            <tr>
                <th>ID</th>
                <th>Post title</th>
                <th>Post category</th>
                <th>Post tag</th>
                <th>Post img</th>
                <th>Post author</th>
                <th>Post date</th>
                <th>Post status</th>
                <th>Action
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
                    <a href="edit_img.php?status=editimg&&id=<?php echo $viewPost['post_id']; ?>">Change</a>
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
                <td class="row">
                    <a class="btn btn-primary col"
                        href="edit_post.php?status=edit&&id=<?php echo $viewPost['post_id']; ?>">Edit</a>
                    <a class="btn btn-danger col ml-1"
                        href="?status=delete&&id=<?php echo $viewPost['post_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <a class="btn btn-info" href="add_post.php">Add post</a>
</div>