<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/useraccount.css">
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

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3> | List of Category</h3>
                <navList>
                    <ulist id="menuList">
                        <list></list>
                        <list></list>
                        <list></list>
                    </ulist>
                </navList>
        </div>

        <br><br>
        <div class="row">
            <div class="col-1">
                <b class="subTitle">List of Purok</b>
                <h4>The Record are base from administrator input and user modification.</h4>
                <button class="specialBut" type="button" onclick="window.location.href='addpurok.php';">Add Purok <img src="css/images/arrow.png"></button>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-purok">
                    <thead>
                        <tr>
                            
                            <th>Purok No.</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM purok");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                    
                                    <td><?php echo $row['purokno']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="#"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-1">
                <b class="subTitle">List of Goverment Mem</b>
                <h4>The Record are base from administrator input and user modification.</h4>
                <button class="specialBut" type="button" onclick="window.location.href='govmem.php';">Add Gov.Mem <img src="css/images/arrow.png"></button>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-govmem">
                    <thead>
                        <tr>
                            
                            <th>Government Membership.</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM govmem");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                   
                                    <td><?php echo $row['governmentmem']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="#"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-1">
                <b class="subTitle">List of Services Categoy</b>
                <h4>The Record are base from administrator input and user modification.</h4>
                <button class="specialBut" type="button" onclick="window.location.href='services.php';">Add Services <img src="css/images/arrow.png"></button>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-services">
                    <thead>
                        <tr>
                           
                            <th>Type</th>
                            <th>Services</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM services");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                   
                                    <td><?php echo $row['type']; ?></td>
                                    <td><?php echo $row['facility']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="#"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-1">
                <b class="subTitle">List of Comfort Room Categoy</b>
                <h4>The Record are base from administrator input and user modification.</h4>
                <button class="specialBut" type="button" onclick="window.location.href='comrom.php';">Add CR Cat.<img src="css/images/arrow.png"></button>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-cr">
                    <thead>
                        <tr>
                            
                            <th>Comfort Rm. Type</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM cr");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                    
                                    <td><?php echo $row['cr']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="#"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>                       

        <br><br>
        <div class="row">
            <div class="col-1">
                <b class="subTitle">List of Health Status</b>
                <h4>The Record are base from administrator input and user modification.</h4>
                <button class="specialBut" type="button" onclick="window.location.href='healthstat.php';">Add Health Stat.<img src="css/images/arrow.png"></button>
            </div>
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-health">
                    <thead>
                        <tr>
                            
                            <th>Health Status.</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM healthstatus");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                    
                                    <td><?php echo $row['healthstatus']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="#"><span class="material-symbols-outlined operation">visibility</span></a>
                                    <span class="material-symbols-outlined operation">delete</span>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>                      

    </div>
</section>

     <!--Start of bootstarap table Purok-->
     <script>
                $(document).ready(function() {
                    $('#dataTables-purok').DataTable({
                        responsive: true,
                        "paging": true,
                        dom: 'Bfrtip',
                        buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
                </script>
                <?php
                echo $error ;
                ?>    
                <!--End of bootstarap table Purok-->

                <!--Start of bootstarap table Govmem-->
                <script>
                $(document).ready(function() {
                    $('#dataTables-govmem').DataTable({
                        responsive: true,
                        "paging": true,
                        dom: 'Bfrtip',
                        buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
                </script>
                <!--End of bootstarap table Govmem-->

                <!--Start of bootstarap table Health-->
                <script>
                $(document).ready(function() {
                    $('#dataTables-health').DataTable({
                        responsive: true,
                        "paging": true,
                        dom: 'Bfrtip',
                        buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
                </script>
                <!--End of bootstarap table Health-->

                <!--Start of bootstarap table Services-->
                <script>
                $(document).ready(function() {
                    $('#dataTables-services').DataTable({
                        responsive: true,
                        "paging": true,
                        dom: 'Bfrtip',
                        buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
                </script>
                <!--End of bootstarap table Services-->

                <!--Start of bootstarap table cr-->
                <script>
                $(document).ready(function() {
                    $('#dataTables-cr').DataTable({
                        responsive: true,
                        "paging": true,
                        dom: 'Bfrtip',
                        buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
                </script>
                <!--End of bootstarap table cr-->
    
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
</body>
</html>