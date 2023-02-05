<?php
    session_start();
  
    if(isset($_SESSION['hloggedin']) && ($_SESSION['hloggedin']==true)){
        header("location:hloghome.php");
        exit;
      
    }
    
    if(isset($_SESSION['ploggedin']) && ($_SESSION['ploggedin']==true)){
        header("location:uloghome.php");
        exit;
        
    }
    
    if(isset($_SESSION['dloggedin']) && ($_SESSION['dloggedin']==true)){
        header("location:dloghome.php");
        exit;
        
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hamro Doctor</title>
        <link rel="stylesheet" href="home_style.css">   
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
                        <li><a href="about.html">About us</li>
                        <li><a href="Contactus.html">Contact us</li>
                        <li><a href="signin.php"><input type="button" class="login" value="sign in"></a></li>
                        <li><a href="signup.php"><input type="button" class="login" value="sign up"></a></li>
                    </ul>
                </li>    
            </ul>
        </nav>

        <div class="flex">
            <h1>Neo Nepal Healthcare</h1>
        </div>

        <div class="content">
    
            <section class="hospitals">
                <div class="heading">
                    <ul  class ="topic" type="none">
                        <li><h2>Book appointment at hospital of your choice</h2></li>
                        <li><a href="hospital.php"><input type="button" class="view_all" value="view all"></a></li>
                    </ul> 
                </div>

                <div class="body">
                    <ul class="details" type="none">
                            <li class="con">
                                    <ul type="none" class="parts">
                                        <li><img src="vayodha.jpg" alt="logo" class="hdp"></li>
                                        <li><p class="hname"><b>Vayodha Hospital pvt.ltd.</b></p>
                                            <p class="hbody">Balkhu Chowk, Kathmandu, Nepal</p></li>
                                    </ul>
                                    <input type="button" class="book" value="Book an appointment">
                            </li>
                        
                            <li class="con">
                                    <ul type="none" class="parts">
                                        <li><img src="bandb.jpg" alt="logo" class="hdp"></li>
                                        <li><p class="hname"><b>B&B Hospital</b></p> 
                                            <p class="hbody">Gwarko, Lalitpur, Nepal</p></li>
                                    </ul>
                                    <input type="button" class="book" value="Book an appointment">
                            </li>   
                    </ul>
                    <ul class="details" type="none">
                        <li class="con">
                                <ul type="none" class="parts">
                                    <li><img src="alka.jpg" alt="logo" class="hdp"></li>
                                    <li><p class="hname"><b>Alka Hospital</b></p> 
                                        <p class="hbody">Jawalakhel, Lalitpur, Nepal</li>
                                </ul>
                                <input type="button" class="book" value="Book an appointment">
                        </li>
                        <li class="con">
                                <ul type="none" class="parts">
                                    <li><img src="norvic.jpg" alt="logo" class="hdp"></li>
                                    <li><p class="hname"><b>Norvic International Hospital</b></p>
                                        <p class="hbody">Thapathali, Kathmandu, Nepal</p></li>
                                </ul>
                                <input type="button" class="book" value="Book an appointment">
                        </li>
                    </ul>
                </div>
            </section>


            <section class="doctors">
                <div class="heading">
                    <ul  class ="topic" type="none">
                        <li><h2>Doctor Appointment</h2></li>
                        <li><a href="doctor.php"><input type="button" class="view_all" value="view all"></a></li>
                    </ul> 
                </div>

                <div class="body">
                    <ul class="details" type="none">
                            <li class="con">
                                    <ul type="none" class="parts">
                                        <li><img src="male.png" alt="logo" class="hdp"></li>
                                        <li><p class="hname"><b>Dr. Dibas Khadka</b></p>
                                            <p class="hbody">Internal Medicine, Gastroenterology, Hepatology, 11 Years of Practice</p></li>
                                    </ul>
                                    <input type="button" class="book" value="Book an appointment">
                            </li>
                        
                            <li class="con">
                                    <ul type="none" class="parts">
                                        <li><img src="male.png" alt="logo" class="hdp"></li>
                                        <li><p class="hname"><b>Dr. Amit Kumar Shah</b></p> 
                                            <p class="hbody">Urologist And Andrologist</p></li>
                                    </ul>
                                    <input type="button" class="book" value="Book an appointment">
                            </li>   
                    </ul>
                    <ul class="details" type="none">
                        <li class="con">
                                <ul type="none" class="parts">
                                    <li><img src="female.png" alt="logo" class="hdp"></li>
                                    <li><p class="hname"><b>Dr. Swasti Sharma</b></p> 
                                        <p class="hbody">Gynaecologist and fertility specialist, 11 Years of practice</li>
                                </ul>
                                <input type="button" class="book" value="Book an appointment">
                        </li>
                        <li class="con">
                                <ul type="none" class="parts">
                                    <li><img src="male.png" alt="logo" class="hdp"></li>
                                    <li><p class="hname"><b>Dr. Anil Baral</b></p>
                                        <p class="hbody">Consultant Physician & Nephrologist</p></li>
                                </ul>
                                <input type="button" class="book" value="Book an appointment">
                        </li>
                    </ul>
                </div>
            </section>
            
        </div>
    </body>
</html>