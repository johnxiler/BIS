<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from account where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update system account</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/adduser.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php   
        require('configOne.php');
        $message = NULL;
    if(isset($_POST["submit"])){

       //get from data
       $username = $_POST["username"];
       $password = $_POST["password"];

        //query database
     
            $queryu = "UPDATE account SET username='".$username."', password='".$password."' WHERE id='".$id."'";
            mysqli_query($conn, $queryu);
            $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Account Updated successfully added!</p>";
            header('location:login.php');

            $mysqlil = NEW MySQLi('localhost','root','','bis');     
            $resultSetl = $mysqlil->query("SELECT * FROM account where id='$id'");
            $rowl = mysqli_fetch_assoc($resultSetl);

            $user = $rowl['username'];
            $pos = $rowl['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', '$user change personal password or username.', '$date')";
                mysqli_query($conn, $logs);
            
    }
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Update user account</h3>
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
                    <h2>Add System<br>Account User</h2>
                    <h4>Input only valid information to proceed on process.</h4>
            </div>

            <div class="col-2">
                <div class="wrapper">
                <form method="POST" action="" enctype="multipart/form-data">

                </div>
            </div>
            <div class="col-2">
                <div class="wrapper">
                    <small>Account Information:</small>
                                    <div class="input-box">
                                        <input class="username" name="username" type="text" value="<?php echo $row['username']?>">
                                        <label>Username:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="password" type="text" value="<?php echo $row['password']?>">
                                        <label>Username:</label>
                                    </div>

                                    <?php
                                            echo $message;
                                    ?> 
                                    <div class="input-box button">
                                            <input id="button" type="submit" name="submit" value="Update">
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