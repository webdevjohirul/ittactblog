<?php
    class blogApp{
        private $conn;

        //database connection
        public function __construct(){
            $dbhost = "localhost";
            $dbuser = "root";
            $dbpass = "";
            $dbname = "blog_project";

            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn){
                die("<h1>Database Connection Error!!</h1>");
            }
        }

        /*=========================================
        =====admin Login-Logout function start=====
        =========================================*/

        //admin login function
        public function adminLogin($data){
            $adminEmail = $data['admin_email'];
            $adminPass = md5($data['admin_pass']);

            $query = "SELECT * FROM admin WHERE admin_email='$adminEmail' && admin_pass='$adminPass'";
            

            if(mysqli_query($this->conn, $query)){
                $admin_info = mysqli_query($this->conn, $query);
                
                if($admin_info){
                    header("location: dashboard.php");
                    $admin_data = mysqli_fetch_assoc($admin_info);

                    session_start();
                    $_SESSION['adminEmail'] = $admin_data['admin_email'];
                }
            }
        }

        //manage admin function
        public function manageAdmin(){
            $query = "SELECT * FROM admin";

            if(mysqli_query($this->conn, $query)){
                $adminData = mysqli_query($this->conn, $query);
                return $admin = mysqli_fetch_assoc($adminData);
            }
        }

        // Author: Johirul Islam
        // Facebook: https://facebook.com/johirulshaky/
        // Instagram: https://instagram.com/johirulshaky/
        // Linkedin: https://linkedin.com/johirulshaky/


        //admin logout function
        public function adminLogout(){
            unset($_SESSION['adminEmail']);
            header("location: index.php");
        }

        /*=========================================
        ======admin Login-Logout function end======
        =========================================*/
        
        /*===============================
        =====Category function start=====
        ===============================*/

        //add category function
        public function addCategory($data){
            $catName = $data['cat_name'];
            $catDes = $data['cat_des'];

            $query = "INSERT INTO categorys(category_name, category_descrip) VALUE('$catName', '$catDes')";

            if(mysqli_query($this->conn, $query)){
                return "Category added successfully";
            }
        }

        //manage category function
        public function manageCategory(){
            $query = "SELECT * FROM categorys";

            if(mysqli_query($this->conn, $query)){
                return mysqli_query($this->conn, $query);
            }
        }

        //edit category function
        public function editCategoy($id){
            $query = "SELECT * FROM categorys WHERE category_id=$id";

            if(mysqli_query($this->conn, $query)){
                $returnEditData = mysqli_query($this->conn, $query);
                return mysqli_fetch_assoc($returnEditData);
            }
        }

        //update category function
        public function updateCategory($data){
            $catId = $data['category_id'];
            $catName = $data['update_cat_name'];
            $catDes = $data['update_cat_des'];

            $query = "UPDATE categorys SET category_name = '$catName', category_descrip= '$catDes' WHERE category_id= $catId";

            if(mysqli_query($this->conn, $query)){
                return "Information Updated successfully";
            }
        }

        //delete category function
        public function deleteCategory($id){
            $query = "DELETE FROM categorys WHERE category_id = $id";

            if(mysqli_query($this->conn, $query)){
                return "Information Deleted successfully";
            }
        }

        /*===============================
        ======Category function end======
        ===============================*/

        /*===============================
        =======Post function start=======
        ===============================*/

        //add post function
        public function addPost($data){
            $postTitle = $data['post_title'];
            $postCategory = $data['post_category'];
            $postTag = $data['post_tag'];
            $postContent = $data['post_content'];
            $postImg = $_FILES['post_img']['name'];
            $tmpImg = $_FILES['post_img']['tmp_name'];
            $postStatus = $data['post_status'];
            $postSummary = $data['post_summary'];

            $query = "INSERT INTO posts(post_title, post_category, post_tag, post_content, post_summary, post_img, post_author, post_date, post_comment, post_status) VALUE('$postTitle', '$postCategory', '$postTag', '$postContent', '$postSummary', '$postImg', 'Admin', now(), 3, '$postStatus')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmpImg, "../upload/$postImg");
                return "Post added successfully";
            }
        }

        //manage post function
        public function managePost(){
            $query = "SELECT * FROM post_with_category";

            if(mysqli_query($this->conn, $query)){
                return mysqli_query($this->conn, $query);
            }
        }

        //manage PUBLIC post function
        public function managePostPublic(){
            $query = "SELECT * FROM post_with_category WHERE post_status = 1";

            if(mysqli_query($this->conn, $query)){
                return mysqli_query($this->conn, $query);
            }
        }

        //edit post function
        public function editPost($id){
            $query = "SELECT * FROM post_with_category WHERE post_id = $id";

            if(mysqli_query($this->conn, $query)){
                $returnEditData = mysqli_query($this->conn, $query);
                return mysqli_fetch_assoc($returnEditData);
            }
        }

        //update post image function
        public function updateImg($data){
            $post_id = $data['update_img_id'];
            $post_img = $_FILES['update_img']['name'];
            $tmpImgName = $_FILES['update_img']['tmp_name'];

            $query = "UPDATE posts SET post_img='$post_img' WHERE post_id=$post_id";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmpImgName, "../upload/$post_img");
                return "Image updated successfully";
            }
        }

        //update post function
        public function updatePost($data){
            $postId = $data['post_id'];
            $postTitle = $data['update_post_title'];
            $postCategory = $data['update_post_category'];
            $postTag = $data['update_post_tag'];
            $postContent = $data['update_post_content'];
            $postStatus = $data['update_post_status'];
            $postSummary = $data['update_post_summary'];

            $query = "UPDATE posts SET post_title='$postTitle', post_category='$postCategory', post_tag='$postTag', post_content='$postContent', post_status='$postStatus', post_summary='$postSummary' WHERE post_id=$postId";

            if(mysqli_query($this->conn, $query)){
                return "Post Updated Successfully";
            }
        }

        //delete post function
        public function deletePost($id){
            $query = "DELETE FROM posts WHERE post_id=$id";

            if(mysqli_query($this->conn, $query)){
                return "Post deleted successfully!";
            }
        }










    }
?>