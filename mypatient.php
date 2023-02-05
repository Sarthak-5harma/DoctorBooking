<?php
    session_start();
    if($_SESSION['dloggedin']!=true){
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
    <title>MyPatient</title>
    <link rel="stylesheet" href="mypatient.css">
</head>
<body>
    
</body>
</html>
<?php
    $nam = $_SESSION['name'];
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "doctor";
     $conn = mysqli_connect($servername, $username, $password, $database);
     $sql = "SELECT * FROM `doctortime` WHERE `name` = '$nam'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) > 0){ 
        echo '<div class="content">';
        echo '<h1> Your Patients for today are: </h1>';
        echo '<table class="tabul">'.
        '<tr>
            <th>Time</th>
            <th>Patient Name</th>
        </tr>';
        while($row = mysqli_fetch_assoc($result)){
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
        }
        echo'</table>';
     }

?>