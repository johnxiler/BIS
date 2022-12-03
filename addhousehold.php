<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Household</title>
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
       $householdno = $_POST["householdno"];
       $purokid = $_POST["purokid"];
       $electid = $_POST["electid"];
       $waterid = $_POST["waterid"];
       $crid = $_POST["crid"];
       $ses = $_POST["ses"];

        //query database
        $resultCheck = $conn->query("SELECT * FROM households WHERE householdno='$householdno'");
        $rowsCheck = mysqli_num_rows($resultCheck);
            if ($rowsCheck < 1) {
                $query = "INSERT INTO households VALUES('','$householdno', '$purokid', '$electid', '$waterid', '$crid', '$ses')";
                     mysqli_query($conn, $query);
                    $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>New Household Added successfully added!</p>";
            }else{
                $message = "<p style='color:black;background-color:orange;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>Record already Exist!</p>";
            } 
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

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', 'Add New Household No $householdno', '$date')";
                mysqli_query($conn, $logs);
    }
    ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Add Households</h3>
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
                    <h2>Add<br>Household</h2>
                    <h4>Input only valid information to proceed on process.</h4>
            </div>

            <div class="col-2">
                <div class="wrapper">
                <form method="POST" action="" enctype="multipart/form-data">
                    <small>Household Information:</small>
                                    <div class="input-box">
                                        <input name="householdno" type="number" required>
                                        <label>Household Number</label>
                                    </div>

                                    <div class="input-box">
                                        <select name="purokid">
                                        <option value="">Select Purok No:</option>
                                        <?php
                                            //connect to the database
                                            $mysqli = NEW MySQLi('localhost','root','','bis');

                                            //query database
                                            $result = $mysqli->query("SELECT * FROM purok");
                                                while($rowpurok = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $rowpurok['id']; ?>"><?php echo $rowpurok['purokno']; ?></option>
                                        <?php } ?>
                                        </select>
                                        <label class="labelspecial">Purok No:</label>
                                    </div> 

                    <small>Socio Economic Status:</small>
                                    <div class="input-box">
                                        <select name="ses">
                                            <option value="">Select Socio Economic Status:</option>
                                            <option value="Upper Class">Upper Class</option>
                                            <option value="Middle Class">Middle Class</option>
                                            <option value="Lower Class">Lower Class</option>
                                        </select>
                                        <label class="labelspecial">Socio Economic Status</label>
                                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="wrapper">
                    <small>Facility Information:</small>
                                    <div class="input-box">
                                        <select name="electid">
                                            <option value="">Select Electricity Services:</option>
                                            <?php
                                            //connect to the database
                                            $mysqli = NEW MySQLi('localhost','root','','bis');

                                            //query database
                                            $resultelectricity = $mysqli->query("SELECT * FROM services where type='electricity'");
                                                while($rowelectricity = mysqli_fetch_assoc($resultelectricity)) {
                                        ?>
                                            <option value="<?php echo $rowelectricity['id']; ?>"><?php echo $rowelectricity['facility']; ?></option>
                                        <?php } ?>
                                        <option value="3">None</option>
                                        </select>
                                    </div>

                                    <div class="input-box">
                                        <select name="waterid">
                                            <option value="">Select Water Services:</option>
                                            <?php
                                            //connect to the database
                                            $mysqli = NEW MySQLi('localhost','root','','bis');

                                            //query database
                                            $resultwater = $mysqli->query("SELECT * FROM services where type='water'");
                                                while($rowwater = mysqli_fetch_assoc($resultwater)) {
                                        ?>
                                            <option value="<?php echo $rowwater['id']; ?>"><?php echo $rowwater['facility']; ?></option>
                                        <?php } ?>
                                        <option value="3">None</option>
                                        </select>
                                    </div>

                                    <div class="input-box">
                                        <select name="crid">
                                            <option value="">Select Com.Rm Type:</option>
                                            <?php
                                            //connect to the database
                                            $mysqli = NEW MySQLi('localhost','root','','bis');

                                            //query database
                                            $resultcr = $mysqli->query("SELECT * FROM cr");
                                                while($rowcr = mysqli_fetch_assoc($resultcr)) {
                                        ?>
                                            <option value="<?php echo $rowcr['id']; ?>"><?php echo $rowcr['cr']; ?></option>
                                        <?php } ?>
                                        </select>
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