<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vision</title>
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
                    <h2>VISION</h2><br><br>
                    <p>
                        The Barangay VII Official,<br>
                        Envisioned Delivering the most basic general services,<br>
                        to have income generating actvities,more trade and industry,<br>
                        with cozy environment,be a friendly and peaceful,<br>
                        a professional and healthy constituents with God fearing and loving people. 
                    </p>
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