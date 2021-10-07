<?php
    $allCategory = $objBlogApp->manageCategory();

    if(isset($_POST['update_cat_submit'])){
        $updateMsg = $objBlogApp->updateCategory($_POST);
    }
    
    if(isset($_GET['status'])){
        if($_GET['status'] = 'delete');
        $id = $_GET['id'];
        $deleteMsg = $objBlogApp->deleteCategory($id);
    }


?>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div class="container shadow p-5 m-5">
    <h2 class="mx-3 text-primary">Manage category</h2>
    <div class="card-body">
        <table class="table table-hover">
        <h4 class="text-success"><?php if(isset($updateMsg)){ echo $updateMsg;} ?></h4>
        <h4 class="text-success"><?php if(isset($deleteMsg)){ echo $deleteMsg;} ?></h4>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Category description</th>
                    <th>Action
                        <a href="manage_category.php">Refresh</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php while($category= mysqli_fetch_assoc($allCategory)){ ?>
                <tr>
                    <td><?php echo $category['category_id']; ?></td>
                    <td><?php echo $category['category_name']; ?></td>
                    <td><?php echo $category['category_descrip']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="edit_category.php?status=edit&&id=<?php echo $category['category_id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="?status=delete&&id=<?php echo $category['category_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <a class="btn btn-info" href="add_category.php">Add category</a>
    </div>
</div>