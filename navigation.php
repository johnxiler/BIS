<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRMS</title>
    <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="css/cssNav/style.css">
        <link rel="stylesheet" href="css/cssNav/font.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Boxicons CDN Link-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php
    session_start();
    $username = $_SESSION['username'];

    $mysqlinav = NEW MySQLi('localhost','root','','bis');     
    $resultSetnav = $mysqlinav->query("SELECT * FROM account where username='$username'");
    $rownav = mysqli_fetch_assoc($resultSetnav);
?>

<body>
    <nav class = sidebar>
        <div class="logo-details">
            <i><img src="css/images/BarangayLogo.png" height="50px" width="53px"></i>
            <!-- <span class="logo_name">StudentRec</span> -->
            <!-- for logo name and system derail or identity-->
            <div class="header-text">
                <span class="logo_name"><br>BARANGAY VII<br></span>
                <span class="logo_dname">Information System</span>
            </div>
        </div>
        <!--xmenu-->

        <ul class="nav-links">
            <li>
                <div class="iocn-link">
                    <a href="dashboard.php">
                        <i class='bx bx-home-alt-2'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                <a href="account.php">
                    <i class='bx bxs-user-pin'></i>
                    <span class="link_name">Accounts</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="account.php">Accounts</a></li>
                    <li><a href="addaccount.php">Add System Account</a></li>
                </ul> 
            </li>
            <li>
                <div class="iocn-link">
                <a href="category.php">
                <i class='bx bx-menu'></i>
                    <span class="link_name">Category</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="category.php">Category</a></li>
                    <li><a href="addpurok.php">Add Purok</a></li>
                    <li><a href="govmem.php">Gov. Membership</a></li>
                    <li><a href="healtstat.php">Health Status</a></li>
                    <li><a href="services.php">Facility Services</a></li>
                    <li><a href="comrom.php">Comfort Rm</a></li>
                </ul> 
            </li>
            <li>
            <div class="iocn-link">
                <a href="analytics.php">
                    <i class='bx bx-bar-chart-square'></i>
                    <span class="link_name">Analytics</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="analytics.php">Analytics</a></li>
                    <li><a href="totalpapulation.php">Total Population</a></li>
                    <li><a href="sesanalytics.php">Socio Economic Status</a></li>
                    <li><a href="electanalytics.php">With Electricity</a></li>
                    <li><a href="wateranalytics.php">With Water Facility</a></li>
                    <li><a href="cranalytics.php">With Comfort Rm.</a></li>
                    <li><a href="healthanalytics.php">Health Status</a></li>
                    <li><a href="educationalytics.php">Educational Attainment</a></li>
                    <li><a href="emploanalytics.php">Employment Status</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="household.php">
                    <i class='bx bx-building-house'></i>
                    <span class="link_name">Households</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="household.php">Households</a></li>
                    <li><a href="addhousehold.php">Add Households</a></li>
                </ul> 
            </li>

            <li>
                <div class="iocn-link">
                <a href="blotter.php">
                    <i class='bx bxs-file' ></i>
                    <span class="link_name">Blotter</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="blotter.php">Blotter</a></li>
                    <li><a class="link_name" href="addblotter.php">Add Record</a></li>
                </ul>
            </li>

            <li>
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-file' ></i>
                    <span class="link_name">Certification</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Certification</a></li>
                    <li><a class="link_name" href="#">Certificate of Indigency</a></li>
                    <li><a class="link_name" href="#">Brgy. Clearance</a></li>
                    <li><a class="link_name" href="#">Brgy. Certification</a></li>
                    <li><a class="link_name" href="#">Business Permit</a></li>
                </ul>
            </li>
            <li>
                <a href="logs.php">
                    <i class='bx bx-history' ></i>
                    <span class="link_name">Activity logs</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="logs.php">Activity Log</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-info-circle'></i>
                    <span class="link_name">About</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="about.php">About</a></li>
                    <li><a href="council.php">Brgy. Council</a></li>
                    <li><a href=".mission.php">Mission</a></li>
                    <li><a href="vision.php">Vision</a></li>
                </ul> 
            </li>
            <li>
        <div class="profile-details">
            <div class="profile-content">
            </div>
            <div class="name-job">
                <div class="profile_name"><?php echo $rownav['lastname']; ?>, <?php echo $rownav['firstname']; ?></div>
                <div class="job"><?php echo $rownav['position']; ?></div>
            </div>
            <a href="logout.php"><i class='bx bx-log-out'></a></i>
        </div>
    </li>
   </ul>
</nav>

    <script src="js/dashboard.js"> </script>
</body>
</html>

