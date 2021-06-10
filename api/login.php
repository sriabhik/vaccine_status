<?php
 include_once "connect.php";
 session_start();
 $mobile = $_POST['mobile'];
 /*$password = $_POST['password'];*/
 $check  = mysqli_query($connect,"SELECT * FROM user WHERE mobile ='$mobile'  ");
if(mysqli_num_rows($check) > 0){
    $userdata  =   mysqli_fetch_array($check);
    
    
    $_SESSION['userdata']  = $userdata;
   
    echo '
    <script>
        window.location = "../route/dashboard.php";
    </script>
    ';
}
else{
    echo '
    <script>
    alert("Invalid Credentials");
     window.location = "../route/Data_miss.html";
    </script>
        ';
}
?>
