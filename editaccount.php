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
    <title>Update system account user</title>
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

        //query database
     
            $queryu = "UPDATE account SET lastname='".$lastname."', firstname='".$firstname."', birthdate='".$birthdate."', gender='".$gender."', position='".$position."' WHERE id='".$id."'";
            mysqli_query($conn, $queryu);
            $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Account Updated successfully added!</p>";
            header('location:viewaccount.php?id='.$id);

            $mysqlil = NEW MySQLi('localhost','root','','bis');     
            $resultSetl = $mysqlil->query("SELECT * FROM account where id='$id'");
            $rowl = mysqli_fetch_assoc($resultSetl);

            $user = $rowl['username'];
            $pos = $rowl['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', '$user Update record of $lastname, $firstname', '$date')";
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
                    <small>Account Information:</small>
                                    <div class="input-box">
                                        <input name="lastname" type="text" value="<?php echo $row['lastname']?>">
                                        <label>Last Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="firstname" type="text" value="<?php echo $row['firstname']?>">
                                        <label>First Name</label>
                                    </div>
                                    <div class="input-box">
                                        <input id="birthday" name="birthdate" type="date" value="<?php echo $row['birthdate']?>">
                                        <label class="labelspecial">Birthdate</label>
                                    </div>
                                    <div class="input-box">
                                        <select name="position">
                                            <option value="<?php echo $row['position']?>"><?php echo $row['position']?></option>
                                            <option value="">Select Position:</option>
                                            <option value="Brgy.Captain">Brgy.Captain</option>
                                            <option value="Brgy. Kagawad">Brgy. Kagawad</option>
                                            <option value="Brgy. Secretary">Brgy. Secretary</option>
                                            <option value="Brgy. Treasurer">Brgy. Treasurer</option>
                                            <option value="SK Chairman">SK Chairperson</option>
                                        </select>
                                        <label class="labelspecial">Position</label>
                                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="wrapper">
                    <small>Account Information:</small>
                                <div class="input-box">
                                        <select name="gender">
                                            <option value="<?php echo $row['gender']?>"><?php echo $row['gender']?></option>
                                            <option value="">Select Gender:</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label class="labelspecial">Gender</label>
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