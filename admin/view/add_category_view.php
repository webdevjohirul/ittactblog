<?php
    if(isset($_POST['cat_submit'])){
        $catMsg = $objBlogApp->addCategory($_POST);
    }
    
?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div class="container shadow p-5 m-5">
    <h2 class="mx-3 text-primary">Add category</h2>
    <div class="card-body">
        <form action="" method="POST">
            <h4 class="text-success"><?php if(isset($catMsg)){ echo $catMsg;} ?></h4>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="cat_name">Category name</label>
                <input name="cat_name" class="form-control py-4" id="cat_name" type="text" placeholder="add category" required />
            </div>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="cat_des">Category description</label>
                <input name="cat_des" class="form-control py-4" id="cat_des" type="text" placeholder="add category description" required />
            </div>
            <div class="form-group mt-4 mb-0">
                <input name="cat_submit" class="btn btn-primary" type="submit" value="Add category">
                <a class="btn btn-info" href="manage_category.php">Manage category</a>
            </div>
        </form>
    </div>
</div>