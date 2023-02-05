<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor signup</title>
    <link rel="stylesheet" href="pt.css">
</head>
<body>
    <div class="content">
        <h1>Fill up the Patient form</h1>
        <form action="" method="post">
            <table name="tabul" >
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>

                <tr>
                    <td><label for="userid">Username: </label></td>
                    <td><input type="text" name="userid" id="userid"></td>
                </tr>

                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="email" name="email" id="email"><br></td>
                </tr>

                <tr>
                    <td><label for="upassword">Password: </label></td>
                    <td><input type="password" name="upassword" id="upassword"></td>
                </tr>

                <tr>
                    <td><input type="radio" name="sex" value="male">
                    <label for="male">Male</label></td>
                    <td><input type="radio" name="sex" value="female">
                    <label for="female">Female</label></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>    
        </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $userid = $_POST['userid'];
            $email = $_POST['email'];
            $upassword = $_POST['upassword'];
            $gender = $_POST['sex'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "patient";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                echo "Sorry something went wrong :(";
            }
            //$sql = "INSERT INTO `patient` (`name`, `email`,  `gender`) 
            //VALUES ('$name', '$email',  '$gender');";

            $sql = "INSERT INTO `patient` (`name`, `userid`, `email`, `password`, `gender`)
             VALUES ('$name', '$userid', '$email', '$upassword', '$gender');";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "DATA ADDED SUCCESSFULLY";
            }
            else{
                echo "Sorry there was an error";
            }
        }       
    ?>
</body>
</html>