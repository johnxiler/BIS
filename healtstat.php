<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add health status</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/addepartment.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php   
        require('configOne.php');

        $message = NULL;

    if(isset($_POST["submit"])){

       //get from data
       $healthstat = $_POST["healthstat"];

        //query database
        $resultCheck = $conn->query("SELECT * FROM healthstatus WHERE healthstatus='$healthstat'");
        $rowsCheck = mysqli_num_rows($resultCheck);
            if ($rowsCheck < 1) {
                $query = "INSERT INTO healthstatus VALUES('','$healthstat')";
                     mysqli_query($conn, $query);
                    $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>New Health Status Added successfully added!</p>";
            }else{
                $message = "<p style='color:black;background-color:orange;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Record already Exist!</p>";
            } 
    }
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Add Health Status Category
                    <ulist id="menuList">
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                    <h2>Add Health<br>Status Category</h2>
                    <h4>Input only valid information to proceed on process.</h4>
            </div>

            <div class="col-2">
                <div class="wrapper">
                <form method="POST" action="" enctype="multipart/form-data">
                    <small>Health Status:</small>
                                    <div class="input-box">
                                        <input name="healthstat" type="text" required>
                                        <label>Enter Health Status:</label>
                                    </div>
                                    <?php
                                            echo $message;
                                    ?> 
                                    <div class="input-box button">
                                            <input id="button" type="submit" name="submit" value="Save">
                                    </div>      
                </form>           
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>