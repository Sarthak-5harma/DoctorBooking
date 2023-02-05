<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital signup</title>
    <link rel="stylesheet" href="hp.css">
</head>
<body>
    <div class="content">
        <h1>Fill up the hospital form</h1>
        <form action="" method="post">
            <table name="tabul" >
                <tr>
                    <td><label for="name">Name: </label></td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>    
                <tr>
                    <td><label for="email">Email: </label></td>
                    <td> <input type="email" name="email" id="email"></td>
                </tr>       
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" id="passwrod"></td>
                </tr>
                <tr>
                    <td><label for="address">address: </label></td>
                    <td><input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td><input class="sub" type="submit" name="submit" value="submit"></td>
                </tr>    
            </table>

        </form>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $pass = $_POST['password'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hospital";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                echo "Sorry something went wrong :(";
            }
            $sql = "INSERT INTO `hospital` (`name`, `address`, `email`, `password`)
             VALUES ('$name', '$address', '$email', '$pass');";
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