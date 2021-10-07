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

       
        /*=============================================
        ====user SignUp-Login-Logout function start====
        =============================================*/
        
        //user sign up function
        public function userSignUp($data){
            $userFirstName = $data['first_name'];
            $userLastName = $data['last_name'];
            $userEmail = $data['email_address'];
            $userPassword = $data['password'];
            $userConfirmPass = $data['passwordConfirm'];

            $query = "INSERT INTO users(user_first_name, user_last_name, user_email, user_password, user_confirm_password) VALUE('$userFirstName', '$userLastName', '$userEmail', '$userPassword', '$userConfirmPass')";

            if(mysqli_query($this->conn, $query)){
                return "Sign Up Successfully";
            }
        }

        //user login function
        public function userLogin($data){
            $userEmail = $data['user_email'];
            $userPass = md5($data['user_pass']);

            $query = "SELECT * FROM users WHERE user_email='$userEmail' && user_password='$userPass'";

            if(mysqli_query($this->conn, $query)){
                $user_info = mysqli_query($this->conn, $query);

                if($user_info){
                    header("location: dashboard.php");
                    $user_data = mysqli_fetch_assoc($user_info);

                    session_start();
                    $_SESSION['userEmail'] = $user_data['user_email'];
                }
            }
        }

        //manage user function
        public function manageUser(){
            $query = "SELECT * FROM users";

            if(mysqli_query($this->conn, $query)){
                $users = mysqli_query($this->conn, $query);
                return $user = mysqli_fetch_assoc($users);
            }
        }

        //user logout function
        public function userLogout(){
            unset($_SESSION['userEmail']);
            header("location: index.php");
        }

        /*=============================================
        =====user SignUp-Login-Logout function end=====
        =============================================*/

        /*===============================
        =====Category function start=====
        ===============================*/

        //manage category function
        public function manageCategory(){
            $query = "SELECT * FROM categorys";

            if(mysqli_query($this->conn, $query)){
                return mysqli_query($this->conn, $query);
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

            $query = "INSERT INTO posts(post_title, post_category, post_tag, post_content, post_summary, post_img, post_author, post_date, post_comment, post_status) VALUE('$postTitle', '$postCategory', '$postTag', '$postContent', '$postSummary', '$postImg', 'User', now(), 3, '$postStatus')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmpImg, "../upload/$postImg");
                return "Post added successfully";
                
            }
        }

        // Author: Johirul Islam
        // Facebook: https://facebook.com/johirulshaky/
        // Instagram: https://instagram.com/johirulshaky/
        // Linkedin: https://linkedin.com/johirulshaky/

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

        /*===============================
        ========Post function end========
        ===============================*/

    }
?>