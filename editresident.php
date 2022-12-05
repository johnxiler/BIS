<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Resident</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/adduser.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php   
       require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from residents where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);

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
                    $query = "UPDATE residents SET householdid='".$householdno."', purok='".$purok."', lname='".$lname."', fname='".$fname."', mname='".$mname."', ext='".$ext."', birthdate='".$birthdate."', gender='".$gender."', employstat='".$empstat."', occupation='".$occupation."', osi='".$osi."', salary='".$salary."', healthstat='".$healthstat."', maritalstatus='".$maritalstatus."', sss='".$sss."', philheath='".$philhealth."', pagibig='".$pagibig."', naid='".$naid."', contactno='".$contactno."', education='".$education."', role='".$role."', position='".$position."' WHERE id='".$id."'";
                    mysqli_query($conn, $query);
                    $message = "<p style='color:white;background-color:green;border-radius:5px;padding:15px;text-align:center;font-style:bold;'>New Resident Added successfully added!</p>";
                    header('location:viewresident.php?id='.$id);
    }
        $message = NULL;

?>

<body>
<?php 
    
    include 'navigation.php';
    if(isset($_POST["submit"])){

            $mysqlil = NEW MySQLi('localhost','root','','bis');     
            $resultSetl = $mysqlil->query("SELECT * FROM account where username='$username'");
            $rownavs = mysqli_fetch_assoc($resultSetl);

            $user = $rownavs['username'];
            $pos = $rownavs['position'];
            $date = date('d-m-y h:i:s'); 

            $logs = "INSERT INTO logs VALUES('','$user', '$pos', 'Update Record of Resident with Lastname $lname', '$date')";
                mysqli_query($conn, $logs);
    }
?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Update Residents</h3>
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
                                        <input name="lastname" type="text" value="<?php echo $row['lname']; ?>">
                                        <label>Last Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="firstname" type="text" value="<?php echo $row['fname']; ?>">
                                        <label>First Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="middlename" type="text" value="<?php echo $row['mname']; ?>">
                                        <label>Middle Name</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="ext" type="text" value="<?php echo $row['ext']; ?>">
                                        <label>Extension.</label>
                                    </div>

                                    <div class="input-box">
                                        <input id="birthday" name="birthdate" type="date" value="<?php echo $row['birthdate']?>">
                                        <label class="labelspecial">Birthdate</label>
                                    </div>

                                    <div class="input-box">
                                        <select name="gender">
                                            <option value="<?php echo $row['gender']?>"><?php echo $row['gender']?></option>
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
                                            <option value="<?php echo $row['employstat']?>"><?php echo $row['employstat']?></option>
                                            <option value="">Select Employment Status:</option>
                                            <option value="Employed">Employed</option>
                                            <option value="Self-employed">Self-employed</option>
                                            <option value="Unemployed">Unemployed</option>
                                            <option value="None">None</option>
                                        </select>
                                        <label class="labelspecial">Employment Status:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="occupation" type="text" value="<?php echo $row['occupation']?>">
                                        <label>Occupation:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="osi" type="text" value="<?php echo $row['osi']?>">
                                        <label>Other Source of Income:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="salary" type="number" value="<?php echo $row['salary']?>">
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
                                        <option value="<?php echo $row['maritalstatus']?>"><?php echo $row['maritalstatus']?></option>
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
                                        <input class="username" name="sss" type="text" value="<?php echo $row['sss']?>">
                                        <label>SSS No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="philhealth" type="text" value="<?php echo $row['philheath']?>">
                                        <label>Philhealth No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="pagibig" type="text" value="<?php echo $row['pagibig']?>">
                                        <label>Pag-Ibig No:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="naid" type="number" value="<?php echo $row['naid']?>">
                                        <label>National ID:</label>
                                    </div>
                </div>
            </div>
            
            <div class="col-2">
                <div class="wrapper">
                    <small>Contact Information:</small>
                                    <div class="input-box">
                                        <input class="username" name="contactno" type="number" value="<?php echo $row['contactno']?>">
                                        <label>Contact Number:</label>
                                    </div>

                    <small>Educational Attainment:</small>
                                    <div class="input-box">
                                        <select name="education">
                                        <option value="<?php echo $row['education']?>"><?php echo $row['education']?></option>
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
                                        <input class="username" name="role" type="text" value="<?php echo $row['role']?>">
                                        <label>Role in the Family:</label>
                                    </div>

                                    <div class="input-box">
                                        <input class="username" name="position" type="number" value="<?php echo $row['position']?>">
                                        <label>Position:</label>
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