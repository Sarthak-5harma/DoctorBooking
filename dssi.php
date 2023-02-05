
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor signin</title>
    <link rel="stylesheet" href="hp.css">
</head>
<body>
<body>
    <div class="content">
        <h1>Fill to login:</h1>
        <form action="" method="post">
            <table name="tabul" >
            <tr>
                <td><label for="userid">Name: </label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="upassword">Password: </label></td>
                <td><input type="password" name="upassword" id="upassword"></td>
            </tr>
            <tr>
                <td><input class="sub" type="submit" name="submit" value="submit"></td>
            </tr>   
        </form>
    </div>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $upassword = $_POST['upassword'];
            $name = $_POST['name'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "doctor";
            
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(!$conn){
                echo "Sorry something went wrong :(";
            }
            $sql = "SELECT*FROM doctor WHERE name='$name' AND password='$upassword'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num==1){
                echo'logged in';
                session_start();
                $_SESSION['dloggedin'] = true;
                $_SESSION['name'] = $name;
                $_SESSION['loggedin'] = true;
                header("location:dloghome.php");
            }
            else{
                echo 'not resistered';
            }
        }
    ?>
</body>