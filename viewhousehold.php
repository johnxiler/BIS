<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Households</title>
    <link rel="icon" href="css/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/viewuser.css">
    <link rel="stylesheet" href="css/viewhousehold.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">

    <!--Start for Bootsrap Data connection-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/dataTables.responsive.css" rel="stylesheet">
    <!--Etart for Bootsrap Data connection-->

     <!--Material for extraction--->
     <link rel="stylesheet" href="css/datatable.css">
     <link rel="stylesheet" href="css/datatablebutton.css">
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <!--End for material Extraction -->
</head>
<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from households where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);

        $purokid = $row['purokid'];
        $electid = $row['electricityid'];
        $waterid = $row['waterid'];
        $crid = $row['crid'];

        $querypurok = "SELECT * from purok where id='".$purokid."'";
        $resultpurok = mysqli_query($conn, $querypurok) or die ($mysqli_error());
        $rowpurok = mysqli_fetch_assoc($resultpurok);

        $queryelect = "SELECT * from services where id='".$electid."'";
        $resultelect = mysqli_query($conn, $queryelect) or die ($mysqli_error());
        $rowelect = mysqli_fetch_assoc($resultelect);

        $querywater = "SELECT * from services where id='".$waterid."'";
        $resultwater = mysqli_query($conn, $querywater) or die ($mysqli_error());
        $rowwater = mysqli_fetch_assoc($resultwater);

        $querycr = "SELECT * from cr where id='".$crid."'";
        $resultcr = mysqli_query($conn, $querycr) or die ($mysqli_error());
        $rowcr = mysqli_fetch_assoc($resultcr);

        $sqlrescount = "SELECT COUNT(*) AS SUMRES FROM residents where householdid='".$id."'";
        $resultrescount = mysqli_query($conn,$sqlrescount);
        $rowrescount = mysqli_fetch_array($resultrescount);

        $sqlfat = "SELECT COUNT(*) AS SUMfat FROM residents where householdid='".$id."' and role='Father'";
        $resfat = mysqli_query($conn,$sqlfat);
        $rowfat = mysqli_fetch_array($resfat);
?>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3> | View Households</h3>
                <navList>
                    <ulist id="menuList">
                        <list><a href="edithousehold.php?id=<?php echo $row['id']; ?>">Update</a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                <h3>HOUSEHOLDS NO.</h3>
                <h2><?php echo $row['householdno']; ?></h2>
                <small>Socio Economic Status:</small>
                <h4><li><?php echo $row['ses']; ?></li></h4>
                <button type="button"><a href="addresident.php?id=<?php echo $row['id']; ?>">Add Member</a><img src="css/images/arrow.png"></button>
                <br><br>
                        <small>Purok No.:</small>
                        <p><?php echo $rowpurok['purokno']; ?></p>
                        <small>Electricity Services:</small>
                        <p><?php echo $rowelect['facility']; ?></p>
                        <small>Water Services:</small>
                        <p><?php echo $rowwater['facility']; ?></p>
                        <small>Comfort Rm. Type</small>
                        <p><?php echo $rowcr['cr']; ?></p>
                        <small>Total Family Member</small>
                        <p><?php echo $rowrescount['SUMRES']?></p>
                        <small>Total Number/s of Family</small>
                        <p><?php echo $rowfat['SUMfat']?></p>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
                            <th>Ext</th>
                            <th>Gender</th>
                            <th>Role</th>
                            <th>Position</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultresident = $mysqli->query("SELECT * FROM residents where householdid = '".$id."'");
                            while($rowresident = mysqli_fetch_assoc($resultresident)) {
                    ?>
                                <tr>
                                    <td><?php echo $rowresident['lname']; ?></td>
                                    <td><?php echo $rowresident['fname']; ?></td>
                                    <td><?php echo $rowresident['mname']; ?></td>
                                    <td><?php echo $rowresident['ext']; ?></td>
                                    <td><?php echo $rowresident['gender']; ?></td>
                                    <td><?php echo $rowresident['role']; ?></td>
                                    <td><?php echo $rowresident['position']; ?></td>
                                    <td> <a href="editresident.php?id=<?php echo $rowresident['id']; ?>"><span class="material-symbols-outlined operation">edit</span></a>
                                    <a href="viewresident.php?id=<?php echo $rowresident['id']; ?>"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            
                <script>
                $(document).ready(function() {
                    $('#dataTables-example').DataTable({
                        responsive: true,
                        "paging": true
                    });
                });
                </script>
                <?php
                echo $error ;
                ?>    
                <!--end of bootstarap table -->
            </div>
        </div>

    </div>
    </section>
</body>
</html>