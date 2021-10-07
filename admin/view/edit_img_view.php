<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = 'editimg'){
            $id = $_GET['id'];
            $displayImg = $objBlogApp->editPost($id);
        }
    }
?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div class="container shadow p-5 m-5">
    <h2 class="mx-3 text-primary">Change image</h2>
    <div class="card-body">
        <form action="manage_post.php" method="POST" enctype="multipart/form-data">
            <div style="position: relative;" class="form-group">
                <input type="hidden" name="update_img_id" value="<?php echo $displayImg['post_id']; ?>">
                <img style="" src="../upload/<?php echo $displayImg['post_img']; ?>" height="250" width="250">
                <input style="position: absolute; bottom:3px; left:3px;" class="text-light" type="file" name="update_img">
            </div>
            <div class="form-group mt-4 mb-0">
                <input name="update_img_submit" class="btn btn-primary" type="submit" value="Update image">
                <a class="btn btn-danger" href="manage_post.php">Cancel</a>
            </div>
        </form>
    </div>