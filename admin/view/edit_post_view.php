<?php
    $getCategory = $objBlogApp->manageCategory();


    if(isset($_GET['status'])){
        if($_GET['status'] = 'edit'){
            $id = $_GET['id'];
            $displayEditData = $objBlogApp->editPost($id);
        }
    }
?>

<div style="background: #d4e4f5;" class="container shadow p-5 m-5">
    <h2 class="mx-3 text-primary">Update post</h2>
    <div class="card-body">
        <form action="manage_post.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="post_id" value="<?php echo $displayEditData['post_id'] ?>">
                <label class="font-weight-bold mb-1" for="update_post_title">update post Title</label>
                <input name="update_post_title" class="form-control py-4" id="update_post_title" type="text"
                    value="<?php echo $displayEditData['post_title'] ?>" />
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="update_post_category">update post category</label>
                        <select name="update_post_category" class="form-control" id="update_post_category">
                            <option value="<?php echo $displayEditData['category_id'] ?>">
                                <?php echo $displayEditData['category_name'] ?></option>
                            <?php while($category = mysqli_fetch_assoc($getCategory)){ ?>
                            <option value="<?php echo $category['category_id'] ?>">
                                <?php echo $category['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="update_post_tag">update post tag</label>
                        <input name="update_post_tag" class="form-control" id="update_post_tag" type="text"
                            value="<?php echo $displayEditData['post_tag'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="update_post_content">update Post content</label>
                <textarea name="update_post_content" class="form-control py-4" id="update_post_content"
                    rows=5 /><?php echo $displayEditData['post_content'] ?></textarea>
            </div>
            <div class="form-row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="update_post_summary">update Post Summary</label>
                        <input name="update_post_summary" class="form-control" id="update_post_summary" type="text"
                            value="<?php echo $displayEditData['post_summary'] ?>" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="update_post_status">Post status</label>
                        <select class="form-control" name="update_post_status" id="update_post_status">
                            <?php 
                                if($displayEditData['post_status'] == 1){
                                    echo "<option value='1'>Publish</option>";
                                }else{
                                    echo "<option value='0'>Draft</option>";
                                }
                            ?>
                            <option value='1'>Publish</option>
                            <option value='0'>Draft</option>


                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="form-control bg-primary text-light" type="submit" name="update_post_submit"
                    value="Update post">
            </div>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

        </form>
        <a class="text-danger" href="manage_post.php">Cancel</a>
    </div>
</div>