<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    connect bootstrap
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> -->
<!-- <title>Contact US</title> -->

<?php
    require_once('../database/connection.php'); 
     require_once('../components/header.php');
    ?>
    
    <!-- <div class="container-fluid abt_top ">
        <img class="abt_img" src=" images/about-img.jpg " alt="... ">
        <div class="centered">Centered</div>
    </div> -->
    <div class="card text-dark mb-5">
        <img class="abt_img" src="../images/contact.jpg" alt="Card image">
        <div class="card-img-overlay history-text">
            <h5 class="card-title history-h ">Contact Us</h5>


        </div>
    </div>

    <div class="container full">
        <div class="row">
            <div class="">
                <div class="card " style="max-width: 1080px;">
                    <div class=" row ">
                        <div class="col-md-4 mt-5 ">
                            <img id="history-img " src="../images/badge.png " class="img-fluid rounded-start " alt="... " width=" ">
                        </div>
                        <div class="col-md-8 mt-5">
                            <div class="card-body ">
                                <h1 class="text-uppercase fw-bold mb-4">
                                    Head office
                                </h1>
                                <p><i class="fa fa-home me-3"></i> 21B, Ja-ela, Malwana</p>
                                <p>
                                    <i class="fa fa-envelope me-3"></i> nimndaas@gmail.com
                                </p>
                                <p><i class="fa fa-phone me-3"></i> + 94 76 652 985</p>
                                <p><i class="fa fa-print me-3"></i> + 94 112 458 21</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0163419572355!2d80.89486059496876!3d6.26157720910121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae6a95c05ea49b5%3A0x15feeed8a2887dc!2sChandrikawewa%20Jayanthi%20College!5e0!3m2!1sen!2slk!4v1625863640494!5m2!1sen!2slk"
                    width="1080px" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</body>

</html>