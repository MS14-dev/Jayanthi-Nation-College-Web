<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    connect bootstrap
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="gallery.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
</head> -->


<!-- php part -->
<?php
require_once('db.php');

    require_once('../database/connection.php'); 
     require_once('../components/header.php');
    
$images;
//if(isset($_SESSION['user_name'])){
$query = "SELECT * FROM gallery";
$row = mysqli_query($database, $query);
$images = mysqli_fetch_all($row);
?>
<!-- php part -->

    <!-- Gallery -->
    <div class="container mt-5">
        <div class="row gallery">
            <?php
             if (isset($images)) {
                foreach ($images as $image) {

                    echo "<div class='col-md-3 col-sm-6 mb-2'>";

                    echo "<div class='card text-center gallery__link'>";
                    echo "<div class=' gallery__thumb card-block'>";
                    echo "<a href='$image[1]' download>";
                    echo " <img src='$image[1]' alt='' class='img-fluid gallery__image' > </a>";
                    echo " <div class='card-title gallery__caption'>";
                    echo " <h4>$image[2] <br>  </h4>";
                    echo " <p>$image[3]   </p>";
                    echo " </div>";
                    // echo "<div class='card-text  gallery__caption'>";
                    // echo "$image[3]";
                    // echo "</div>";
                    echo "</div>";
                   
                    echo " </div>";
                    echo " </div>";
                    
                }}
            
            ?>
        </div>
    </div>


</body>

</html>