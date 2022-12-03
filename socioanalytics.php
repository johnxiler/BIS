<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Population</title>
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
        $sql = "select * from households where ses=ses";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)){
            $ses[] = $row['ses'];
            $houseid = $row['id'];

        $sqlhousehold = "SELECT COUNT(*) AS SUM FROM households WHERE ses= ses";
        $resultses = mysqli_query($con,$sqlhousehold );
        while($rowses = mysqli_fetch_array($resultses)){
            $total[] = $rowses['SUM'];
        }
    }
}

    $sqlrescount = "SELECT COUNT(*) AS SUMRES FROM residents";
    $resultrescount = mysqli_query($con,$sqlrescount);
    $rowrescount = mysqli_fetch_array($resultrescount);

    $date = date('d-m-y h:i:s');

    $sqlmale = "SELECT COUNT(*) AS SUMMALE FROM residents where gender='Male'";
    $resultmale = mysqli_query($con,$sqlmale);
    $rowmale = mysqli_fetch_array($resultmale);

    $sqlfemale = "SELECT COUNT(*) AS SUMFEMALE FROM residents where gender='Female'";
    $resultfemale = mysqli_query($con,$sqlfemale);
    $rowfemale = mysqli_fetch_array($resultfemale);

    // $sqlelectric = "SELECT COUNT(*) AS SUMELECTRIC FROM `households` where electricityid= ";

    
?>

<body>
<?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3>| Socio Economic Status</h3>
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
                    <h4>Total Number of Population</h4>
                    <h2><?php echo $rowrescount['SUMRES']?></h2>
                    <h4>As of <b><?php echo $date ?></b></h4>

                    <!-- <br>
                    <h4>Total Number of Population <b>Male:</b></h4>
                    <h2><?php echo $rowmale['SUMMALE']?></h2>

                    <br>
                    <h4>Total Number of Population <b>Female:</b></h4>
                    <h2><?php echo $rowfemale['SUMFEMALE']?></h2> -->
            </div>
            <div class="col-2">
                    <canvas id="myChart"></canvas>
            </div>
        </div>

    </div>
    </section>

<script>
const ctx = document.getElementById('myChart').getContext('2d');

const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: <?php echo json_encode($ses) ?>,
        datasets: [{
            label: 'Total number of socioeconomic status',
            data: <?php echo json_encode($total) ?>,
            fill: true,
            backgroundColor: [
                'rgba(153, 306, 255)',
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

<!--for bootsrap table-->
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
<!--end of bootstarap table -->
</body>
</html>
