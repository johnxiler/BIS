<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add system account user</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php   
        require('config.php');

        $message = NULL;

    if(isset($_POST['submit'])){

       //get from data
       $username = $_POST['username'];
       $password = $_POST['password'];

        //query database
        $select = mysqli_query($conn,"SELECT * FROM account WHERE username = '$username' and password = '$password'");
        $row= mysqli_fetch_array($select);
            if (is_array($row)) {
                $_SESSION["username"] = $row["username"];
                $_SESSION["password"] = $row["password"];
            }else{
                $message = "<p style='color:black;background-color:orange;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Invalid Username and Password!</p>";
            } 

            if(isset($_SESSION["username"])){
                header("location:dashboard.php");
            }

            $mysqlill = NEW MySQLi('localhost','root','','bis');     
            $resultSetll = $mysqlill->query("SELECT * FROM account where username='$username'");
            $rowll = mysqli_fetch_assoc($resultSetll);

            $pos = $rowll['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$username', '$pos', 'Log In on $date', '$date')";
                mysqli_query($conn, $logs);
    }
?>

<body>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo">
                <navList>
                    <ulist id="menuList">
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
        <div class="col-1">
                <h3>BARANGAY VII</h3>
                <h2>INFORMATION SYSTEM</h2>
                <p>Daet, Camarines Norte</p>
                <h4>4600 Philippines</h4>
            </div>

            <div class="col-2">
                <div class="wrapper">
                <form action="login.php" method="post">
                                    <div class="input-box">
                                        <input class="username" name="username" type="text" required>
                                        <label>Create Username</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="password" type="Password" required>
                                        <label>Create Password</label>
                                    </div>
                                    <?php
                                            echo $message;
                                    ?> 
                                    <div class="input-box button">
                                            <input id="button" type="submit" name="submit" value="login">
                                    </div>
                </div>
                    </form>
            </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>