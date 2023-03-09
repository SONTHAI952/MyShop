<?php
    include '/xampp/htdocs/myshop//connect/connect.php';
    if(isset($_POST['submit']))
    {
        $user = $_POST['name'];
        $password = $_POST['pass'];
        $login = "SELECT * FROM user WHERE username = '".$user."' and password = '".$password."'";
        $query = $conn->query($login);
        if(mysqli_num_rows($query)>0){
           header("Location: http://localhost/myshop/product.php");
            exit();
        }
        else
        {
            echo "Login Fail";
        }

    }

   
?>