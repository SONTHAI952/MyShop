<?php
    include 'connect.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $data = array();
    $login = "SELECT * FROM user WHERE username = '".$username."' and password = '".$password."'";
    $queryLogin = $conn->query($login);
    if(mysqli_num_rows($queryLogin)>0){
        while($row = mysqli_fetch_assoc($queryLogin)){
        
            $get_cart = "SELECT * FROM cart WHERE userId = '".$row['userId']."'";
            $queryCart = $conn->query($get_cart);
            while($row2 = mysqli_fetch_assoc($queryCart)){
                $listCart = array(
                    'productId'=>$row2['productId'],
                     'cartId'=>$row2['cartId']
            );
            $data[] = $listCart;
            }

            $list = array('fullname'=> $row['fullname'],
            'address'=>$row['address'],
            'phone'=>$row['phone'],
            'cart'=>$data,    
            );

        }
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($list);
    }
    else
    {
        echo "Đăng nhập thất bại";
    }

?>