<?php
    include_once "connect.php";
    $name = $_POST['name'] ;
    $mobile = $_POST['mobile'] ;
    /*$password = $_POST['password'] ;
    $cpassword = $_POST['cpassword'] ;*/
    $address = $_POST['address'] ;
    $image = $_FILES['photo']['name'] ;
    $tmp_name= $_FILES['photo']['tmp_name'] ;
    $role = $_POST['role'];
    $num_length = strlen((string)$mobile);
    if($num_length == 12){
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect,"INSERT INTO user(name,mobile,address,photo,role) VALUES('$name','$mobile','$address','$image','$role')");
    if($insert){
        echo '
            <script>
            alert("Registration Under Verification");
            window.location = "../route/register.html";
            </script>
        ';
    }
    else{
        echo '
            <script>
            alert("Oops!  Error Occurs");
            window.location = "../route/register.html";
            </script>
    ';
    }
    }
    else{
        echo '
            <script>
            alert("Enter Valid 12 digit Addhar Number Please!");
            window.location = "../route/register.html";
            </script>
        ';
    }
?>