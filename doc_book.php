<?php
    session_start();
    if($_SESSION['loggedin']!=true){
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
    <title>Book Doctor</title>
    <link href="doc_book_style.css" rel="stylesheet">
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
            $dname = $_COOKIE['doctorName'];

            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT * FROM `doctor` WHERE `name` = '$dname'";
            $result = mysqli_query($conn, $sql);    

            echo '<h1 class="doc_heading">Select Appointment Time for '.$dname.'</h1>';
            echo'<form method="post">';
            while($row = mysqli_fetch_assoc($result)){

                for($i=$row['startT']; $i < $row['endT']; $i++){
                    //echo $i.":00 ";
                    //echo $i.":30 ";
                    
                    echo 
                        '<div class="timeS">'.
                            '<ul type="none" class="tyam">'.
                                '<li class="con"><input type="submit" name="'.$i.':00" value="'.$i.':00" class="tim">'.

                                '<li class="con"><input type="submit" name="'.$i.':30" value="'.$i.':30" class="tim">'.
                        '</div>';   
                }
            }
            echo '</form>';
            ?>
            <?php
            $nam = $_SESSION['name'];
             $servername = "localhost";
             $username = "root";
             $password = "";
             $database = "doctor";
             $dname = $_COOKIE['doctorName'];
 
             $conn = mysqli_connect($servername, $username, $password, $database);
             $sql = "SELECT * FROM `doctor` WHERE `name` = '$dname'";
             $result = mysqli_query($conn, $sql);    
            
                while($row = mysqli_fetch_assoc($result)){
                    for($i=1;$i<25;$i++){
                        $c=$i.':00';
                        if(isset($_POST[$c])){
                            $z="UPDATE `doctortime` SET `$c` = '$nam' WHERE `doctortime`.`name` = '$dname';";
                            $x=mysqli_query($conn,$z);
                            
                        }
                    }
                    for($j=1;$j<25;$j++){
                    $c1=$j.':30';
                    if(isset($_POST[$c1])){
                        $z1="UPDATE `doctortime` SET `$c1` = '$nam' WHERE `doctortime`.`name` = '$dname';";
                        $x1=mysqli_query($conn,$z1);
                    }
                }
            }    
        ?>      
 </body>
</html>