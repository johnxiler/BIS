<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blotter</title>
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
       $complainant = $_POST["complainant"];
       $complainto = $_POST["complainto"];
       $complain = $_POST["complain"];
       $title = $_POST["title"];
       $remarks = $_POST["remarks"];
       $date = $_POST["date"];

        //query database
        $query = "INSERT INTO blotter VALUES('','$complainant', '$complainto', '$complain', '$title', '$remarks','$date')";
        mysqli_query($conn, $query);
        $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Record Save!</p>";
    }
?>

<body>
<?php 
    
    include 'navigation.php';
    if(isset($_POST["submit"])){

            $mysqli = NEW MySQLi('localhost','root','','bis');     
            $resultSet = $mysqli->query("SELECT * FROM account where username='$username'");
            $row = mysqli_fetch_assoc($resultSet);

            $user = $row['username'];
            $pos = $row['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', 'Add Blotter Case for $complainant', '$date')";
                mysqli_query($conn, $logs);
    }
    ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Add Record Blotter</h3>
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
                    <h2>Add Blotter<br>Record</h2>
                    <h4>Input only valid information to proceed on process.</h4>
            </div>

            <div class="col-2">
                <div class="wrapper">
                <form method="POST" action="" enctype="multipart/form-data">
                    <small>Person's Information:</small>
                                    <div class="input-box">
                                        <input name="date" type="hidden" value="<?php echo date('d-m-y h:i:s'); ?>">
                                        <input name="complainant" type="text" required>
                                        <label>Name of  Complainant:</label>
                                    </div>

                                    <div class="input-box">
                                        <input name="complainto" type="text" required>
                                        <label>Complain to:</label>
                                    </div>
                    <small>Statement:</small>
                                    <div class="input-box">
                                            <textarea class="username" name="complain" required>
                                            </textarea>
                                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="wrapper">
                    <small>Complain Information:</small>
                                    <div class="input-box">
                                        <input class="username" name="title" type="text">
                                        <label>Complain Title:</label>
                                    </div>
                                    <div class="input-box">
                                        <input class="username" name="remarks" type="text">
                                        <label>Remarks</label>
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