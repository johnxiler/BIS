<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Certification</title>
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<?php
    require('configOne.php');
        $id=$_REQUEST['id'];
        $query = "SELECT * from residents where id='".$id."'";
        $result = mysqli_query($conn, $query) or die ($mysqli_error());
        $row = mysqli_fetch_assoc($result);

        $purok = $row['purok'];

        $queryp = "SELECT * from purok where id='".$purok."'";
        $resultp = mysqli_query($conn, $queryp) or die ($mysqli_error());
        $rowp = mysqli_fetch_assoc($resultp);
?>

<body style="font-family:outfit;">
    <center>
        <table>
            <tr></tr>
            <td><img src="css/images/BarangayLogo.png" height="150px" width="150px"></td>
            <td style="line-height:0%;">
                <center>
                    <p>Repulic of the Philippines</p>
                    <p>Province of Camarines Norte</p>
                    <p>Municiplaity of Daet</p>
                    <p>Barangay VII</p><br>
                    <h2>OFFICE OF PUNONG BARANGAY</h2>
                </center>
            </td>
            <td><img src="css/images/BarangayLogo.png" height="150px" width="150px"></td>
        </table>
        <table>
            <tr><td>______________________________________________________________________________________</td></tr>
            <tr><td><center><h1>BARANGAY CERTIFICATION</h1></center></td></td>
        </table>
    </center>
    <table>
        <tr>
            <td>
                <h3 style="font-size:20px;">RE/SUBJECT:</h3> 
            </td>
            <td><p style="font-size:20px;"> CERTIFICATION</p></td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h4 style="font-size:20px;">TO WHOM IT MAY CONCERN:</h4> 
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                This is certify that <b><?php echo $row['fname']?> <?php echo $row['lname']?>, <?php echo $row['mname']?><?php echo $row['ext']?></b> of legal age, <b><?php echo $row['maritalstatus']?></b> a bonna fide resident of<br>
                Purok <b><?php echo $rowp['purokno']?></b>, Pilar st. Brangay VII, Daet, camarines Norte is known to be a law abiding
                peaceful and of good moral character.
                <br></br>

                This is certify further that <b><?php echo $row['fname']?> <?php echo $row['lname']?>, <?php echo $row['mname']?><?php echo $row['ext']?></b> is not been charged or convicted of 
                any intraction of law as stated in Barangay Ordinance or any offense involving moral 
                turpitude in this barangay.<br></br>

                Issued this <input type="text" style="text-decoration:none;background:none;border:none;text-align:center;width:20px;font-weight:bold;font-family:outfit;"> day of <input type="text" style="text-decoration:none;background:none;border:none;text-align:center;width:200px;font-weight:bold;font-family:outfit;"> 
                at Barangay VII, Daet, Camarines Norte <input type="text" style="text-decoration:none;background:none;border:none;text-align:center;width:400px;font-weight:bold;font-family:outfit;">
            </td>
        </tr>
    </table>
    <br><br>
    <table>
        <tr>
            <td>Prepared By:<br><br></td>
            <td width="250px"></td>
            <td>Attested By:<br><br></td>
        </tr>
        <tr>
            <td><b>DIANA B. BELGA</b></td>
            <td width="250px"></td>
            <td><b>BOTVINNIK BUENA MAGO</b></td>
        </tr>
        <tr>
            <td>---------------------------</td>
            <td width="250px"></td>
            <td>---------------------------</td>

        </tr>
        <tr>
            <td>Barangay Secretary</td>
            <td width="250px"></td>
            <td>Barangay Captain</td>
        </tr>
    </table>
    <br>
    <br>

    <table>
        <tr>
            <td>CTC NUMBER:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
        <tr>
            <td>DATE ISSUED:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
        <tr>
            <td>PLACE ISSUED:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
        <tr>
            <td>AMOUNT PAID:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
        <tr>
            <td>OR NUMBER:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
        <tr>
            <td>DATE ISSUED:</td>
            <td><input type="text" style="text-decoration:none;background:none;border:none;text-align:left;width:200px;font-weight:bold;font-family:outfit;"></td>
        </tr>
    </table>

    <p style="text-align:right;">Date Printed:</p>
</body>
</html>