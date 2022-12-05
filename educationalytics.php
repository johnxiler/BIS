<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Analytics</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/analytics.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">

     <!--Start for Bootsrap Data connection-->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="bootstrap/css/dataTables.responsive.css" rel="stylesheet">
    <!--Start for Bootsrap Data connection-->

    <script src="chart/jquery-1.9.1.js"></script>
    <script src="chart/Chart.min.js"></script>
</head>

<?php
    $con = mysqli_connect("localhost","root","","bis");

    if(!$con){
        echo "Disconnected!";
    }else{
        $sql = "select * from education order by id";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)){
            $purok[] = $row['education'];
            $purokid = $row['education'];

        $mysqli = NEW MySQLi('localhost','root','','bis');
        $sqlresident = "SELECT COUNT(*) AS SUM FROM residents WHERE education='$purokid'";
        $resultresident = mysqli_query($con,$sqlresident );

        while($rowresident = mysqli_fetch_array($resultresident)){
            $total[] = $rowresident['SUM'];
        }

        }
    }

    $sqlrescount = "SELECT COUNT(*) AS SUMRES FROM residents";
    $resultrescount = mysqli_query($con,$sqlrescount);
    $rowrescount = mysqli_fetch_array($resultrescount);

    $sqlmale = "SELECT COUNT(*) AS SUMMALE FROM residents where education='Elementary Graduate'";
    $resultmale = mysqli_query($con,$sqlmale);
    $rowmale = mysqli_fetch_array($resultmale);

    $sqlfemale = "SELECT COUNT(*) AS SUMFEMALE FROM residents where education='Junior High Graduate'";
    $resultfemale = mysqli_query($con,$sqlfemale);
    $rowfemale = mysqli_fetch_array($resultfemale);

    $sqlflash = "SELECT COUNT(*) AS SUMflash FROM residents where education='Senior High Graduate'";
    $resultflash = mysqli_query($con,$sqlflash );
    $rowflash = mysqli_fetch_array($resultflash );

    $sqlnone = "SELECT COUNT(*) AS SUMnone FROM residents where education='Undergrad'";
    $resultnone = mysqli_query($con,$sqlnone);
    $rownone = mysqli_fetch_array($resultnone);

    $sqlcollege = "SELECT COUNT(*) AS SUMcollege FROM residents where education='College Graduate'";
    $resultcollege = mysqli_query($con,$sqlcollege);
    $rowcollege = mysqli_fetch_array($resultcollege);

    $date = date('d-m-y h:i:s');
?>

<body>
<?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Analytics Educational Attainment</h3>
                <navList>
                    <ulist id="menuList">
                        <list><a href=""></a></list>
                        <list><a href=""> </a></list>
                        <list><a href=""> </a></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-1">
                <h3>ANLYTICS</h3>
                <p class="tilt">RESIDENTS WITH<br>
                    THERE EDUCATIONAL ATTAINMENT</p>
                <p>in households</p>
            </div>
            <div class="col-2">
                    <canvas id="myChart"></canvas>
            </div>
        </div>

        <div class="row">
        <div class="col-1">
                    <h4>Total Number of Residents</h4>
                    <h2><?php echo $rowrescount['SUMRES']?></h2>
                    <h4>As of <b><?php echo $date ?></b></h4>

                    <br>
                    <h4>Total Number of Residents that are <b>Elementary Graduate</b></h4>
                    <h2><?php echo $rowmale['SUMMALE']?></h2>

                    <br>
                    <h4>Total Number of Residents that are <b>Junior High Graduate</b></h4>
                    <h2><?php echo $rowfemale['SUMFEMALE']?></h2>

                    <br>
                    <h4>Total Number of Residents that are <b>Senior High Graduate</b></h4>
                    <h2><?php echo $rowflash['SUMflash']?></h2>

                    <br>
                    <h4>Total Number of Residents that are <b>Undergrad</b></h4>
                    <h2><?php echo $rownone['SUMnone']?></h2>

                    <br>
                    <h4>Total Number of Residents that are <b>College Graduate</b></h4>
                    <h2><?php echo $rowcollege['SUMcollege']?></h2>

            </div>
            <div class="col-2">
                <center>
                    <table width="100%" class="table" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
                            <th>Ext</th>
                            <th>Gender</th>
                            <th>Education</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');
                        
                        //query database
                        $resultresident = $mysqli->query("SELECT * FROM residents");
                            while($rowresident = mysqli_fetch_assoc($resultresident)) {
                                $electmean = $rowresident['education'];
                    ?>
                            <?php
                               $resultservices = $mysqli->query("SELECT * FROM education where education='$electmean'");
                               $rowservices  = mysqli_fetch_assoc($resultservices);
                            ?>
                                <tr>
                                    <td><?php echo $rowresident['lname']; ?></td>
                                    <td><?php echo $rowresident['fname']; ?></td>
                                    <td><?php echo $rowresident['mname']; ?></td>
                                    <td><?php echo $rowresident['ext']; ?></td>
                                    <td><?php echo $rowresident['gender']; ?></td>
                                    <td><?php echo $rowservices['education']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="viewresident.php?id=<?php echo $rowresident['id']; ?>"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
                </center>
            
                <!--for bootsrap tableOne-->
                        <script src="bootstrap/js/jquery.min.js"></script>
                        <script src="bootstrap/js/jquery.dataTables.min.js"></script>
                        <script src="bootstrap/js/dataTables.bootstrap.min.js"></script>
                        <script src="bootstrap/js/dataTables.responsive.js"></script>
                        <script src="bootstrap/js/bootstrap.min.js"></script>
                        <script>
                        $(document).ready(function() {
                            $('#dataTables-example').DataTable({
                                responsive: true
                            });
                        });
                </script>
                <!--end of bootstarap tableOne -->
            </div>
        </div>

    </div>
    </section>

<script>
const ctx = document.getElementById('myChart').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?php echo json_encode($purok) ?>,
        datasets: [{
            label: '',
            data: <?php echo json_encode($total) ?>,
            fill: true,
            backgroundColor: [
                'rgba(153, 102, 255)',
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
                'rgba(75, 192, 192)',
                'rgba(255, 159, 64)'
            ]
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

</body>
</html>
