<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/internal.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php
     $con = mysqli_connect("localhost","root","","bis");

    $sqlrescount = "SELECT COUNT(*) AS SUMRES FROM residents";
    $resultrescount = mysqli_query($con,$sqlrescount);
    $rowrescount = mysqli_fetch_array($resultrescount);

    $sqlhh = "SELECT COUNT(*) AS SUMhh FROM households";
    $resulthh = mysqli_query($con,$sqlhh);
    $rowhh = mysqli_fetch_array($resulthh);

    $sqlpr = "SELECT COUNT(*) AS SUMpr FROM purok";
    $resultpr = mysqli_query($con,$sqlpr);
    $rowpr = mysqli_fetch_array($resultpr);

    $sqlmale = "SELECT COUNT(*) AS SUMMALE FROM residents where employstat='Employed'";
    $resultmale = mysqli_query($con,$sqlmale);
    $rowmale = mysqli_fetch_array($resultmale);

    $date = date('d-m-y h:i:s');
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo">
                <navList>
                    <ulist id="menuList">
                        <list><a href="">Brgy.Council</a></list>
                        <list><a href="">Mission</a></list>
                        <list><a href="">Vision</a></list>
                        <list><a href="">About</a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                <h3>BARANGAY VII</h3>
                <h2>INFORMATION SYSTEM</h2>
                <p>Daet, Camarines Norte</p>
                <h4>4600 Philippines</h4>
            </div>

            <div class="col-2">
                <div class="content">
                    <div class="count">
                        <small>Total Number of Residents:</small>
                        <h2><a href="totalpapulation.php"><?php echo $rowrescount['SUMRES']; ?></a></h2>
                        <small>as of <?php echo $date; ?></small>
                    </div><br><br>

                    <div class="count">
                        <small>Total Number of Households:</small>
                        <h2><a href="household.php"><?php echo $rowhh['SUMhh']; ?></a></h2>
                        <small>as of <?php echo $date; ?></small>
                    </div><br><br>
                </div>
            </div>

            <div class="col-2">
                <div class="content">
                    <div class="count">
                        <small>Total Number of Purok:</small>
                        <h2><a href="totalpapulation.php"><?php echo $rowpr['SUMpr']; ?></a></h2>
                        <small>as of <?php echo $date; ?></small>
                    </div><br><br>

                    <div class="count">
                        <small>Total Number of Employed:</small>
                        <h2><a href="emploanalytics.php"><?php echo $rowmale['SUMMALE']; ?></a></h2>
                        <small>as of <?php echo $date; ?></small>
                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
    </section>
    <script>
        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";

        function togglemenu(){
            if(menuList.style.maxHeight == "0px"){
                menuList.style.maxHeight = "130px";
            }else{
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    <script src="js/passlog.js"></script>
</body>
</html>