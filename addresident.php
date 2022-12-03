<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Resident</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/adduser.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php   
       require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from households where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $purok = $row['purokid'];


    if(isset($_POST["submit"])){

       //get from data
       $householdno = $row['id'];
       $lname = $_POST["lastname"];
       $fname = $_POST["firstname"];
       $mname = $_POST["middlename"];
       $ext = $_POST["ext"];
       $birthdate = $_POST["birthdate"];
       $gender = $_POST["gender"];
       $empstat = $_POST["employstat"];
       $occupation = $_POST["occupation"];
       $osi = $_POST["osi"];
       $salary = $_POST["salary"];
       $healthstat = $_POST["healthstat"];
       $maritalstatus = $_POST["maritalstatus"];
       $sss = $_POST["sss"];
       $philhealth = $_POST["philhealth"];
       $pagibig = $_POST["pagibig"];
       $naid = $_POST["naid"];
       $contactno = $_POST["contactno"];
       $education = $_POST["education"];
       $role = $_POST["role"];
       $position = $_POST["position"];

        //query database
       
                $query = "INSERT INTO residents VALUES('','$householdno', '$purok', '$lname', '$fname', '$mname', '$ext', '$birthdate', '$gender', '$empstat', '$occupation', '$osi', '$salary', '$healthstat', '$maritalstatus', '$sss', '$philhealth', '$pagibig', '$naid', '$contactno', '$education', '$role', '$position')";
                     mysqli_query($conn, $query);
                    $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>New Resident Added successfully added!</p>";
                    header('location:viewhousehold.php?id='.$id);
    }
        $message = NULL;

?>

<body>
<?php 
    
    include 'navigation.php';
    if(isset($_POST["submit"])){

            $mysqli = NEW MySQLi('localhost','root','','bis');     
            $resultSet = $mysqli->query("SELECT * FROM account where username='$username'");
            $rownavs = mysqli_fetch_assoc($resultSet);

            $user = $rownavs['username'];
            $pos = $rownavs['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', 'Add New Residents with Lastname $lname', '$date')";
                mysqli_query($conn, $logs);
    }
?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Add Resident for Household No: </h3> <h3><b style="visibility:hidden;">__</b><?php echo $row['householdno']; ?></h3>
                <navList>
                    <ulist id="menuList">
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="wrapper">
                <form method="POST" action="" enctype="multipart/form-data">
                    <small>Personal Information:</small>
                                    <div class="input-box">
                                        <input name="lastname" type="text" required>
                                        <label>Last Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="firstname" type="text" required>
                                        <label>First Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="middlename" type="text" required>
                                        <label>Middle Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="ext" type="text">
                                        <label>Extension.</label>
                                    </div>

                                    <div class="input-box">
                                        <input id="birthday" name="birthdate" type="date" required>
                                        <label class="labelspecial">Birthdate</label>
                                    </div>

                                    <div class="input-box">
                                        <select name="gender">
                                            <option value="">Select Gender:</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        <label class="labelspecial">Gender:</label>
                                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="wrapper">
                    <small>Source Income:</small>
                                    <div class="input-box">
                                        <select name="employstat">
                                            <option value="">Select Employment Status:</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="None">None</option>
                                        </select>
                                        <label class="labelspecial">Employment Status:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="occupation" type="text">
                                        <label>Occupation:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="osi" type="text">
                                        <label>Other Source of Income:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="salary" type="number">
                                        <label>Estimated Monhtly Salary:</label>
                                    </div>

                                    <div class="input-box">
                                        <select name="healthstat">
                                        <option value="">Select Health Status:</option>
                                        <?php
                                            //connect to the database
                                            $mysqli = NEW MySQLi('localhost','root','','bis');

                                            //query database
                                            $result = $mysqli->query("SELECT * FROM healthstatus");
                                                while($rowhealth = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $rowhealth['id']; ?>"><?php echo $rowhealth['healthstatus']; ?></option>
                                        <?php } ?>
                                        </select>
                                        <label class="labelspecial">Health Status:</label>
                                    </div> 

                                    <div class="input-box">
                                        <select name="maritalstatus">
                                            <option value="">Select Marital Status:</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                        </select>
                                        <label class="labelspecial">Civil Status:</label>
                                    </div>
                </div>
            </div>

            <div class="col-2">
                <div class="wrapper">
                    <small>Government Membership:</small>
                                    <div class="input-box">
                                        <input class="username" name="sss" type="text" required>
                                        <label>SSS No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="philhealth" type="text" required>
                                        <label>Philhealth No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="pagibig" type="text" required>
                                        <label>Pag-Ibig No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="naid" type="number" required>
                                        <label>National ID:</label>
                                    </div>
                </div>
            </div>
            
            <div class="col-2">
                <div class="wrapper">
                    <small>Contact Information:</small>
                                    <div class="input-box">
                                        <input class="username" name="contactno" type="number">
                                        <label>Contact Number:</label>
                                    </div>

                    <small>Educational Attainment:</small>
                                    <div class="input-box">
                                        <select name="education">
                                            <option value="">Select Educational Attainment:</option>
                                            <option value="Elementary Graduate">Elementary Graduate</option>
                                            <option value="Junior High Graduate">Junior High Graduate</option>
                                            <option value="Senior High Graduate">Senior High Graduate</option>
                                            <option value="Undergrad">Undergrad</option>
                                            <option value="College Graduate">College Graduate</option>
                                        </select>
                                        <label class="labelspecial">Educational Attainment:</label>
                                    </div>

                    <small>Family Role Information:</small>
                                    <div class="input-box">
                                        <select name="role">
                                            <option value="">Select Role:</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Son">Son</option>
                                            <option value="Daugther">Daugther</option>
                                            <option value="Grand Mother">Grand Mother</option>
                                            <option value="Grand Father">Grand Father</option>
                                        </select>
                                        <label class="labelspecial">Family Role:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="position" type="number" required>
                                        <label>Position:</label>
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