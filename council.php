<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Council</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/internal.css">
    <link rel="stylesheet" href="css/allmaster.css">
    <link rel="stylesheet" href="css/font.css">
</head>

<body>
    <?php include 'navigation.php' ?>
    <section class="home-section">
    <div class="container">
        <div class="navbar">
            <img src="css/images/SystemLogo.png" class="logo">
                <navList>
                    <ulist id="menuList">
                        <list><a href="council.php">Brgy.Council</a></list>
                        <list><a href="mission.php">Mission</a></list>
                        <list><a href="vision.php">Vision</a></list>
                        <list><a href="about.php">About</a></list>
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
                <div class="con">
                    <h2>BARANGAY COUNCIL</h2><br><br>

                    <b>Hon. Botvinnik B. Mago</b><br>
                    <small>BARANGAY CAPTAIN</small><br><br>
                    
                    <table>
                        <tr>
                            <td>
                            <b>Hon. Carlito A. Abanto</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                            <td><p style="visibility:hidden;">______<p></td>
                            <td>
                            <b>Hon. Alecia A. Vargas</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                        <tr>
                        <tr>
                            <td>
                            <b>Hon. Maria Luisa B. Lopez</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                            <td><p style="visibility:hidden;">______<p></td>
                            <td>
                            <b>Hon. Diosdado A. Nebres, Jr.</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                        <tr>
                        <tr>
                            <td>
                            <b>Hon. Marcial C. Pimentel</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                            <td><p style="visibility:hidden;">______<p></td>
                            <td>
                            <b>Hon. Evelyn L. Cacho</b><br>
                            <small>BARANGAY KAGAWAD</small>
                            </td>
                        <tr>
                        <tr>
                            <td>
                            <b>Hon. Kenneth Bryan N. Abaño</b><br>
                            <small>BARANGAY KAGAWAD</small><br><br>
                            </td>
                        <tr>
                        <tr>
                            <td>
                            <b>Diana B. Belga</b><br>
                            <small>BARANGAY SECRETARY</small>
                            </td>
                            <td><p style="visibility:hidden;">______<p></td>
                            <td>
                            <b>Maricar C. Amores</b><br>
                            <small>BARANGAY TREASURER</small>
                            </td>
                        <tr>
                    </table><br>

                    <b>Hon. Marylou R. Abad</b><br>
                    <small>SK CHAIRMAN</small><br>
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
</body>
</html>