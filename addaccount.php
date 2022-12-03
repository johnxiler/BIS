<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add system account user</title>
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
       $lastname = $_POST["lastname"];
       $firstname = $_POST["firstname"];
       $birthdate = $_POST["birthdate"];
       $gender = $_POST["gender"];
       $position = $_POST["position"];
       $username = $_POST["username"];
       $password = $_POST["password"];

        //query database
        $resultCheck = $conn->query("SELECT * FROM account WHERE username='$username'");
        $rowsCheck = mysqli_num_rows($resultCheck);
            if ($rowsCheck < 1) {
                $query = "INSERT INTO account VALUES('','$lastname', '$firstname', '$birthdate', '$gender', '$position', '$username', '$password')";
                     mysqli_query($conn, $query);
                    $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>New Account Added successfully added!</p>";
            }else{
                $message = "<p style='color:black;background-color:orange;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Record already Exist!</p>";
            } 
        
            $mysqli = NEW MySQLi('localhost','root','','bis');     
            $resultSet = $mysqli->query("SELECT * FROM account where username='$username'");
            $row = mysqli_fetch_assoc($resultSet);

            $user = $row['username'];
            $pos = $row['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', 'Add New Account of username $username', '$date')";
                mysqli_query($conn, $logs);
            
    }
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Add user account</h3>
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
                    <small>Account Information:</small>
                                    <div class="input-box">
                                        <input name="lastname" type="text" required>
                                        <label>Last Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="firstname" type="text" required>
                                        <label>First Name</label>
                                    </div>
                                    <div class="input-box">
                                        <input id="birthday" name="birthdate" type="date" required>
                                        <label class="labelspecial">Birthdate</label>
                                    </div>
                                    <div class="input-box">
                                        <select name="position">
                                            <option value="">Select Position:</option>
                                            <option value="Brgy.Captain">Brgy.Captain</option>
                                            <option value="Brgy. Kagawad">Brgy. Kagawad</option>
                                            <option value="Brgy. Secretary">Brgy. Secretary</option>
                                            <option value="Brgy. Treasurer">Brgy. Treasurer</option>
                                            <option value="SK Chairman">SK Chairman</option>
                                        </select>
                                        <label class="labelspecial">Gender</label>
                                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="wrapper">
                    <small>Account Information:</small>
                                <div class="input-box">
                                        <select name="gender">
                                            <option value="">Select Gender:</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label class="labelspecial">Gender</label>
                                    </div>

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
                                            <input id="button" type="submit" name="submit" value="Save">
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