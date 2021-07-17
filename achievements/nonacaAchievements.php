<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements</title>
    connect bootstrap
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body> -->
<!-- <title>Achievements</title> -->

<?php
    require_once('../database/connection.php'); 
     require_once('../components/header.php');
    ?>
    <!-- <div class="container-fluid abt_top ">
        <img class="abt_img" src=" images/about-img.jpg " alt="... ">
        <div class="centered">Centered</div>
    </div> -->
    <div class="card text-dark mb-5 ">
        <img class="abt_img" src="../images/achi.jpg" alt="Card image">
        <div class="card-img-overlay history-text">
            <h5 class="card-title history-h ">Non Academic Achievements</h5>


        </div>
    </div>
    <div class="container full">
        <div class="card mb-3 odd" style="max-width: 1080px;">
            <div class="row g-0">
                <div class="col-md-4 ">
                    <img id="history-img" src="../images/chakgudu.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.This is a wider card with supporting
                            text below as a natural lead-in to additional content. This content
                            is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 even" style="max-width: 1080px;">
            <div class="row g-0">
                
                <div class="col-md-4">
                    <img src="../images/kirikema.jpg" class="img-fluid rounded-start" alt="...">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.This is a wider card with supporting
                            text below as a natural lead-in to additional content. This content
                            is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 odd" style="max-width: 1080px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img id="history-img" src="../images/hathpolegema.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.This is a wider card with supporting
                            text below as a natural lead-in to additional content. This content
                            is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>