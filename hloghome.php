<?php
    session_start();
    if($_SESSION['hloggedin']!=true){
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
    <link rel="stylesheet" href="hloghome.css">
</head>
</head>
<body>
    
        <nav class="navbar">
            <ul class="nav" type="none">
                <li>
                    <ul class="nav1" type="none">
                        <li><h1 class="hname"><?php echo $_SESSION['name'];?></h1></li> 
                    </ul> 
                </li>       
                <li>
                    <ul class="nav2" type="none">
                    <li><a href="logout.php"><input type="button" class="logout" value="log out"></a></li>
                    </ul>
                </li>    
            </ul>
        </nav>

<?php
    $nam = $_SESSION['name'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "doctor";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        echo "Sorry something went wrong :(";
    }
    $sql = "SELECT * FROM `doctortime` WHERE `hospital` = '$nam'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){ 
        echo '<div class="content">';
        echo "<h1>Today's appointments of all you doctors are:</h1>";
        while($row = mysqli_fetch_assoc($result)){
            echo '<h2>'.$row['name'].'</h2>';
            echo '<table class="tabul">';
            for($i=1;$i<=24;$i++){
                $m = $i.':00';
                $n = $i.':30';
                if($row[$m] != NULL){
                    echo'<tr>';
                    echo'<td>'.$m.'</td>';
                    echo'<td>'.$row[$m].'</td>';
                    echo'</tr>';
                }
                if($row[$n] !=NULL) { 
                echo'<tr>';
                echo'<td>'.$n.'</td>';
                echo'<td>'.$row[$n].'</td>';
                echo'</tr>';
                }
            }
            echo '</table>';
        }
       

    }
?>
</body>
</html>