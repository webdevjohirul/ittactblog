<?php
    $getCategory = $objBlogApp->manageCategory();

    if(isset($_POST['post_submit'])){
        $postMsg = $objBlogApp->addPost($_POST);
    }

?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div style="background: #d4e4f5;" class="container shadow p-5 m-5">
    <h2 class="mx-3 text-primary">Add post</h2>
    <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            <h4 class="text-success"><?php if(isset($postMsg)){ echo $postMsg;} ?></h4>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="post_title">Add post Title</label>
                <input name="post_title" class="form-control py-4" id="post_title" type="text"
                    placeholder="Enter post title" required />
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="post_category">Add post category</label>
                        <select name="post_category" class="form-control" id="post_category">
                            <?php while($category = mysqli_fetch_assoc($getCategory)){ ?>
                            <option value="<?php echo $category['category_id'] ?>">
                                <?php echo $category['category_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="post_tag">Add post tag</label>
                        <input name="post_tag" class="form-control" id="post_tag" type="text"
                            placeholder="Enter post tag">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="post_content">Post content</label>
                <textarea name="post_content" class="form-control py-4" id="post_content"
                    placeholder="Enter post content" rows=5 required /></textarea>
            </div>
            <div class="form-row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="post_img">Upload Image</label><br>
                        <input class="form-control" name="post_img" id="post_img" type="file" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="font-weight-bold mb-1" for="post_status">Post status</label>
                        <select class="form-control" name="post_status" id="post_status">
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="post_summary">Post Summary</label>
                <input name="post_summary" class="form-control py-4" id="post_summary" type="text"
                    placeholder="Enter post summary" />
            </div>
            <div class="form-group">
                <input class="form-control bg-primary text-light" type="submit" name="post_submit" value="Publish post">
            </div>

        </form>
    </div>
</div>