<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account user</title>
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

     <!--Start for QR Camera Data Search-->
     <link rel="stylesheet" href="css/qrscanner.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--End for QR Camera- Data Search-->
</head>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo"> <h3> | List of System User Account</h3>
                <navList>
                    <ulist id="menuList">
                        <list></list>
                        <list></list>
                        <list></list>
                    </ulist>
                </navList>
        </div>

        <div class="row">
            <div class="col-2">
                    <table width="100%" class="table" id="dataTables-example">
                    <thead>
                        <tr>
                           
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Gender</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $error = NULL;
                        //connect to the database
                        $mysqli = NEW MySQLi('localhost','root','','bis');

                        //query database
                        $resultSet = $mysqli->query("SELECT * FROM account");
                            while($row = mysqli_fetch_assoc($resultSet)) {
                    ?>
                                <tr>
                                    
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['firstname']; ?></td>
                                    <td><?php echo $row['position']; ?></td>
                                    <td><span class="material-symbols-outlined operation">edit</span>
                                    <a href="viewaccount.php?id=<?php echo $row['id']; ?>"><span class="material-symbols-outlined operation">visibility</span></a>
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
                <!--end of bootstarap table -->
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
</body>
</html>