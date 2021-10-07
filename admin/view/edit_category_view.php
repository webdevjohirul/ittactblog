<?php
    if(isset($_GET['status'])){
        if($_GET['status'] = 'edit'){
            $id = $_GET['id'];
            $displayEditData = $objBlogApp->editCategoy($id);
        }
    }

?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div class="container shadow p-3 m-3">
    <h2 class="mx-3 text-primary">Update category</h2>
    <div class="card-body">
        <form action="manage_category.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="category_id" value="<?php echo $displayEditData['category_id']; ?>">
                <label class="font-weight-bold mb-1" for="update_cat_name">Category name</label>
                <input name="update_cat_name" class="form-control py-4" id="update_cat_name" type="text" value="<?php echo $displayEditData['category_name']; ?>" required />
            </div>
            <div class="form-group">
                <label class="font-weight-bold mb-1" for="update_cat_des">Category description</label>
                <input name="update_cat_des" class="form-control py-4" id="update_cat_des" type="text" value="<?php echo $displayEditData['category_descrip']; ?>" required />
            </div>
            <div class="form-group mt-4 mb-0">
                <input name="update_cat_submit" class="btn btn-primary" type="submit" value="Update category">
                <a class="btn btn-danger" href="manage_category.php">Cancel</a>
            </div>
        </form>
    </div>