<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doctor signup</title>
    <link rel="stylesheet" href="ds.css">
</head>
<body>
<div class="content">
        <h1>Fill up the doctor form</h1>
        <form action="" method="post">
            <table name="tabul" >
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>

                <tr>
                    <td><label for="email">Email: </label></td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>

                <tr>
                    <td><label for="userid">Username: </label></td>
                    <td><input type="text" name="userid" id="userid"></td>
                </tr>

                <tr>
                    <td><label for="upassword">Password: </label></td>
                    <td><input type="password" name="upassword" id="upassword"></td>
                </tr>

                <tr>
                    <td><label for="hospital">Hospital name:</label></td>
                    <td><input type="text" name="hospital" id="hospital"></td>
                </tr>

                <tr>
                    <td><label for="field">Field</label></td>
                    <td><input type="textarea" name="field" id="field"></td>
                </tr>
                
                <tr>
                    <td><input type="radio" name="sex" value="male">
                        <label for="male">Male</label></td>
                    <td><input type="radio" name="sex" value="female">
                        <label for="female">Female</label></td>
                </tr>
                
                <tr>
                    <td><label for="time">Choose your working hour:</label></td>
                </tr>    
                <tr>
                    <td><label for="startTime">Start:</label></td>
                    <td><select name="startTime" id="startTime">
                        <option value="1">1:00</option>
                        <option value="2">2:00</option>
                        <option value="3">3:00</option>
                        <option value="4">4:00</option>
                        <option value="5">5:00</option>
                        <option value="6">6:00</option>
                        <option value="7">7:00</option>
                        <option value="8">8:00</option>
                        <option value="9">9:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22">22:00</option>
                        <option value="23">23:00</option>
                        <option value="24">24:00</option>
                    </select></td>    
                </tr>

                <tr>
                    <td><label for="endTime">End:</label></td>
                    <td><select name="endTime" id="startTime">
                        <option value="1">1:00</option>
                        <option value="2">2:00</option>
                        <option value="3">3:00</option>
                        <option value="4">4:00</option>
                        <option value="5">5:00</option>
                        <option value="6">6:00</option>
                        <option value="7">7:00</option>
                        <option value="8">8:00</option>
                        <option value="9">9:00</option>
                        <option value="10">10:00</option>
                        <option value="11">11:00</option>
                        <option value="12">12:00</option>
                        <option value="13">13:00</option>
                        <option value="14">14:00</option>
                        <option value="15">15:00</option>
                        <option value="16">16:00</option>
                        <option value="17">17:00</option>
                        <option value="18">18:00</option>
                        <option value="19">19:00</option>
                        <option value="20">20:00</option>
                        <option value="21">21:00</option>
                        <option value="22">22:00</option>
                        <option value="23">23:00</option>
                        <option value="24">24:00</option>
                    </select> </td>  
                </tr>
                <tr>
                    <td><input class="sub" type="submit" name="submit" value="submit"></tr>
                </tr>
            </table>
        </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $userid = $_POST['userid'];
            $upassword = $_POST['upassword'];
            $hospital = $_POST['hospital'];
            $field = $_POST['field'];
            $gender = $_POST['sex'];
            $startTime = $_POST['startTime'];
            $endTime = $_POST['endTime'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                echo "Sorry something went wrong :(";
            }
            //$sql = "INSERT INTO `doctor` (`name`, `email`, `hname`, `gender`, `field`, `startT`, `endT`, `date`) 
             //       VALUES ('$name', '$email', '$hospital', '$gender', '$field', '$startTime', '$endTime', current_timestamp());";


            $sql = "INSERT INTO `doctor` (`name`, `email`, `userid`, `password`, `hname`, `gender`, `field`, `startT`, `endT`, `date`)
                    VALUES ('$name', '$email', '$userid', '$upassword', '$hospital', '$gender', '$field', '$startTime', '$endTime', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "DATA ADDED SUCCESSFULLY";
            }
            else{
                echo "Sorry there was an error";
            }
            $sql = "INSERT INTO `doctortime` (`name`, `hospital`)VALUES('$name','$hospital')";
            $a = mysqli_query($conn,$sql);
        }       
    ?>
</body>
</html>