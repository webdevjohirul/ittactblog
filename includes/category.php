<?php
    include_once("./admin/class/function.php");
    $objBlogApp = new blogApp();

    $getCategory = $objBlogApp->manageCategory();

?>

<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                <?php while($category = mysqli_fetch_assoc($getCategory)){ ?>
                <li><a href="#"><?php echo $category['category_name'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>