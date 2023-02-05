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
        <h1 class="doc_heading">Choose your Hospital</h1>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hospital";
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT * FROM `hospital`";
            $result = mysqli_query($conn, $sql);


            if(mysqli_num_rows($result) > 0){ 
                echo '<ul class="details" type="none">';
                echo '<div class="content">';
                while($row = mysqli_fetch_assoc($result)){

                    echo
                    '<li class="con">'. 
                    '<ul type="none" class="parts">'.
                    '<li><img src="male.png" alt="logo" class="hdp"></li>'.
                    '<li><p class="hname"><b>'.$row['name'].'</b></p>'.
                    '<p class="hbody">'.$row['address'].'</p></li>'.
                    '</ul>'.
                    '<form method="post">'.
                    '<input type="submit" class="book" value="Book an appointment" name="'.$row['name'].'book">'.
                    '</form>';
                }
                echo "</div>"; 
            }
        ?>
        <?php  
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hospital";
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT * FROM `hospital`";
            $result = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result)){
                $check = $row['name'].'book';
                if(isset($_POST[$check])){
                    setcookie("hospitalName", $row['name'], time()+86400, "/");
                    header("location:hosp_book.php");
                }
            }    
         ?>        
</body>
</html>