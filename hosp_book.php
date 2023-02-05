<?php
    session_start();
    if($_SESSION['loggedin']!=true ){
        header("location:signin.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="doctor_style.css" rel="stylesheet">
</head>
<body>
        <nav class="navbar">
            <ul class="nav" type="none">
                <li>
                    <ul class="nav1" type="none">
                        <li><h1><a href="home.php">LOGO</a></h1></li> 
                    </ul> 
                </li>       
                <li>
                    <ul class="nav2" type="none">
                        <li>Book an appointment</li>
                        <li>Health Packages</li>
                        <li><?php echo $_SESSION['name'];?></a></li>
                        <li><a href="logout.php"><input type="button" class="logout" value="log out"></a></li>
                    </ul>
                </li>    
            </ul>
        </nav>
        <?php
             $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT * FROM `doctor`";
            $result = mysqli_query($conn, $sql); 
            while($row = mysqli_fetch_assoc($result)){
                $check = $row['name'].'book';
                if(isset($_POST[$check])){
                    setcookie("doctorName", $row['name'], time()+86400, "/");
                    header("location:doc_book.php");
                }
            }
        ?>        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            $hname = $_COOKIE['hospitalName'];
           
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT * FROM `doctor` WHERE `hname` = '$hname'";
            $result = mysqli_query($conn, $sql);

            echo '<h1 class="doc_heading">Choose Your Doctor from '.$hname.' hospital </h1>';


           
            if(mysqli_num_rows($result) > 0){ 
                echo '<ul class="details" type="none">';
                echo '<div class="content">';
                while($row = mysqli_fetch_assoc($result)){

                    echo
                    '<li class="con">'. 
                    '<ul type="none" class="parts">';
                        
                    if($row['gender']=='male'){
                        echo '<li><img src="male.png" alt="logo" class="hdp"></li>';
                    }
                    else{
                        echo '<li><img src="female.png" alt="logo" class="hdp"></li>';
                    }
                    echo 
                    '<li><p class="hname"><b>'.$row['name'].'</b></p>'.
                    '<p class="hbody">'.$row['field'].'</p>'.
                    '<p class="hbody">'.$row['hname'].'</p></li>'.
                    '</ul>'.
                    '<form method="post">'.
                    '<input type="submit" class="book" value="Book an appointment" name="'.$row['name'].'book">'.
                    '</form>';
                }
                echo "</div>";
            }    
         ?>        
</body>
</html>