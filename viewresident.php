<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Households</title>
    <link rel="icon" href="css/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/viewuser.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">

</head>
<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from residents where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3> | View Households</h3>
                <navList>
                    <ulist id="menuList">
                        <list><a href="editdhouseholds.php?id=<?php echo $row['id']; ?>">Update</a></list>
                    </ulist>
                </navList>
        </div>
        
        <div class="row">
            <div class="col-1">
                <h3>Full Name:</h3>
                <h2><?php echo $row['lname']; ?>, <?php echo $row['fname']; ?> <?php echo $row['mname']; ?></h2>
                <button type="button"><a href="addresident.php?id=<?php echo $row['id']; ?>">Update</a><img src="css/images/arrow.png"></button>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="details">
                    <small>Household Number:</small>
                    <h4><?php echo $row['householdid']; ?></h4>
                    <small>Gender:</small>
                    <h4><?php echo $row['gender']; ?></h4>
                    <small>Birthdate:</small>
                    <h4><?php echo $row['birthdate']; ?></h4>
                    <small>Marital Status:</small>
                    <h4><?php echo $row['maritalstatus']; ?></h4>
                    <small>Contact Number:</small>
                    <h4><?php echo $row['contactno']; ?></h4>
                </div>
            </div>
            <div class="col-2">
                    <div class="details">
                       <h4>Employment Information</h4><br>
                        <small>Employment Status:</small>
                        <p><?php echo $row['employstat']; ?></p>
                        <small>Occupation:</small>
                        <p><?php echo $row['occupation']; ?></p>
                        <small>Other Source of Income:</small>
                        <p><?php echo $row['osi']; ?></p>
                        <small>Monhtly Estimated Salary</small>
                        <p><?php echo $row['salary']; ?></p>
                    </div>
            </div>
            <div class="col-2">
                    <div class="details">
                    <h4>Government Mem. Information:</h4><br>
                    <small>SSS Number:</small>
                    <p><?php echo $row['sss']; ?></p>
                    <small>Philhealth Number:</small>
                    <p><?php echo $row['philheath']; ?></p>
                    <small>Pag-ibig Number:</small>
                    <p><?php echo $row['pagibig']; ?></p>
                    <small>National ID Number:</small>
                    <p><?php echo $row['naid']; ?></p>
                    </div>
            </div>
            <div class="col-2">
                    <div class="details">
                    <h4>Health Status:</h4><br>
                    <small>Health Status:</small>
                    <h4><?php echo $row['healthstat']; ?></h4><br>
                    <h4>Educational Attainment:</h4>
                    <small>Education:</small>
                    <h4><?php echo $row['education']; ?></h4>
                    </div>
            </div>
        </div>

    </div>
    </section>
</body>
</html>