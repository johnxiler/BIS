<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view blotter</title>
    <link rel="icon" href="css/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/viewuser.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from blotter where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3> | View Blotter Records</h3>
                <navList>
                    <ulist id="menuList">
                        
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                <h3>COMPLAINANT FULLNAME:</h3>
                <h2><?php echo $row['complainant']; ?></h2>
                <small>CASE ID:</small>
                <h4><?php echo $row['id']; ?></h4>
                <small>DATE CASE:</small>
                <h4><?php echo $row['date']; ?></h4>
                <small>Complain to:</small>
                <h4><?php echo $row['complainto']; ?></h4>
                <small>Complain Title:</small>
                <h4><?php echo $row['title']; ?></h4>
                <small>Remarks:</small>
                <h4><?php echo $row['remarks']; ?></h4>
            </div>

            <div class="col-2">
                <div class="statement">
                    <small>Statement:</small><br>
                    <h4><?php echo $row['statement']; ?></h4>
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
</html>