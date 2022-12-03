<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Households</title>
    <link rel="icon" href="css/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/viewuser.css">
    <link rel="stylesheet" href="css/useraccount.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from account where id='".$id."'";
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
                        
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                <h3>FULLNAM:</h3>
                <h2><?php echo $row['firstname']; ?>, <?php echo $row['lastname']; ?></h2>
                <small>USER ID:</small>
                <h4><li><?php echo $row['id']; ?></li></h4>
                <small>POSITION:</small>
                <h4><?php echo $row['position']; ?></h4>
                <small>Birthdate:</small>
                <h4><?php echo $row['birthdate']; ?></h4>
                <small>Gender:</small>
                <h4><?php echo $row['gender']; ?></h4>
                <button type="button"><a href="editaccount.php?id=<?php echo $row['id']; ?>">Update</a><img src="css/images/arrow.png"></button>
            </div>
        </div>
    </div>
    </section>
</body>
</html>