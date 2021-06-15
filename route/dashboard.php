
<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
    $userdata = $_SESSION['userdata'];
    if($_SESSION['userdata']['role'] == 1){
        $status = '<b style = "color:green" >VACCINATED - ( COVISHIELD)</b>';
    }
    else if($_SESSION['userdata']['role'] == 2){
    $status = '<b style = "color: green" > VACCINATED - ( COVAXIN)</b>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel ="stylesheet" href = "../route/dashboard.css">
    <style>
        
    </style>
</head>
<body>
    <div id = "mainSection">
        <div id ="headSection">
        <a href = "../" ><button id ="b1"  type ="submit" class = "b1">Back </button></a>
        <a   href = "logout.php"><button id ="b2" type="submit" class = "b2">Log Out</button></a>
            <h1>DETAILS</h1>

        </div>
        <hr>
            <div id = "profile">
                <img src = "../uploads/<?php echo $userdata['photo']?>" width= "25%" height="25%">
                <br><br><br>
                <b>Name    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b><?php echo $userdata['name']?>
                <br><br><br>
                <b>Adhaar  &nbsp;&nbsp;&nbsp;:</b><?php echo $userdata['mobile']?>
                <br><br><br>
                <b>Address &nbsp;:</b><?php echo $userdata['address']?>
                <br><br><br>
                <b>Status  &nbsp;&nbsp;&nbsp;&nbsp;:</b><?php echo  $status?>
            </div>
            
     </div>
     
</body>
</html>