<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    connect bootstrap
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body> -->
<!-- <title>About Us</title> -->

<?php
    require_once('../database/connection.php'); 
     require_once('../components/header.php');
    ?>
    <!-- <div class="container-fluid abt_top ">
        <img class="abt_img" src=" images/about-img.jpg " alt="... ">
        <div class="centered">Centered</div>
    </div> -->
    <div class="card text-dark">
        <img class="abt_img" src="../images/about-img.jpg" alt="Card image">
        <div class="card-img-overlay">
            <h5 class="card-title abt-text">Mahindyodaya Technical Lab</h5>
        </div>-
    </div>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3 ">

                <a href="Mahinda.php">
                    <h6 class="selected" style="color: #f1c40f; ">Mahindyodaya Technical Lab</h6>
                </a>
                <a href="tech.php">
                    <h6>Mahindodaya Technological Faculty</h6>
                </a>
                <a href="Ground.php">
                    <h6>Ground </h6>
                </a>
                <a href="computer.php">
                    <h6>Computer Labs</h6>
                </a>
                <a href="Multimedia.php">
                    <h6>Multimedia Unit</h6>
                </a>

            </div>
            <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9 right-sec">
                <h3>අසව්, දරව්, හැසිරෙව් </h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic tenetur nostrum inventore atque possimus voluptatum eum laudantium! Dolore, officiis soluta libero magni eius dolores aliquid temporibus exercitationem! Aperiam, incidunt. Quia
                    ad doloribus accusamus repellat cumque culpa sit voluptate, quos, maiores sapiente nam soluta quibusdam possimus illo labore. Deserunt, reiciendis corporis.</p>


            </div>
        </div>
    </div>
</body>

</html>