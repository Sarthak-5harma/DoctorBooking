<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <form method="post" action="">
            name:<input type="text" id="name" name="name"><br>
            email:<input type="email" id="email" name="email"><br>
            password:<input type="password" id="password" name="password"><br>
            subscriber(true/false):<input type="text" id="subscriber" name="subscriber"><br>
            <input type="submit" value="submit">
        </form> 
        <?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $passowrd = $_POST["password"];
    $subscriber = $_POST["subscriber"];

    $servername = "localhost";
    $username = "root";
    $passowrd = "";

    $conn = mysqli_connect($servername, $username, $passowrd);
    $sql = "CREATE DATABASE management";
    $ress = mysqli_query($conn,$sql);

    $sq = "CREATE TABLE `management`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , 
    `email` VARCHAR(30) NOT NULL ,`password` VARCHAR(30) NOT NULL , `subscriber` BOOLEAN NOT NULL, PRIMARY KEY(`id`))";
    $ra = mysqli_query($conn,$sq);
    $a="INSERT INTO `management`.`users` (`name`, `email`, `password`, `subscriber`) 
    VALUES ('$name', '$email', '$passowrd', '$subscriber');";
    $q = mysqli_query($conn,$a);
    

}
?>
    </body>
</html>
