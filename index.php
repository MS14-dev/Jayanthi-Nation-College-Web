<?php
require_once('components/headerIndex.php');
require_once('database/connection.php');
?>

<?php

    $query = "SELECT*FROM news";

    $result = mysqli_query($connection, $query);

    if (isset($result)) {
        $result_set = mysqli_fetch_all($result);
        //[[id=1,title=xxxx,body=xxxx],[id=2,body,title]]
        
        // $id = $result_set[0][0];
        // $title = $result_set[0][1];
        // $body = $result_set[0][2];
        // $image = $result_set[0][3];
        //echo print_r($result_set);
        //echo $title;
        

    }else{
        echo "query of fetching news is failed";
    }

?>
<!-- Animation start -->
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
<!-- Animation end -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="index_carousel">
            <div class="index_title_div">
                <h1 >Chandrikawewa Jayanthi National College</h1>
                <h3>Padalangala</h3>
                <h4>අසව|දරව|හැසිරෙව</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <br>
    <div class="row">
        <div class="index_mission col-md-4">
            <center><h4><b>දැක්ම</b></h4></center><br>
            <p>ගුණ නුවණින් පිරි යහපත් දරු පිරිසක් බිහි කිරීම</p>
            <center><h4><b>VISION</b></h4></center><br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi vitae aspernatur accusamus exercitationem facilis doloribus asperiores mollitia est id eligendi.</p>
        </div>
        <div class="index_vision col-md-8">
            <center><h4><b>මෙහෙවර</b></h4></center><br>
            <p>නිදහස් නිවහල් මත දරණ නිර්මාණශීලී වූත්, කාර්යක්ෂම වූත්, ඵලදායී වූත්,  ධනාත්මක ආකල්පවලින් හෙබි, සම්පත් දායකයින් පිරිසක් බිහිකර, ඔවුන් රටේ සංවර්ධනයට දායක කරවීමයි.</p>
            <center><h4><b>MISSION</b></h4></center><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nesciunt, asperiores eaque aliquam sapiente sequi neque fugiat nemo iure ratione?</p>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="index_principal_img_div col-md-4">
            <img id="index_principal_img" src="./images/principal.jpg" alt="principal">
        </div>
        <div class="index_principal_msg col-md-8">
            <h5>Principal's Message</h5><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, placeat. Consequuntur, commodi illo error nisi minima molestias similique, officia repellat perspiciatis qui corrupti soluta temporibus at. Fuga a nam fugiat sint aliquid perspiciatis quaerat voluptatibus mollitia ipsam nostrum cum, animi perferendis molestias quos expedita modi iusto blanditiis ex eveniet quod.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, placeat. Consequuntur, commodi illo error nisi minima molestias similique, officia repellat perspiciatis qui corrupti soluta temporibus at. Fuga a nam fugiat sint aliquid perspiciatis quaerat voluptatibus mollitia ipsam nostrum cum, animi perferendis molestias quos expedita modi iusto blanditiis ex eveniet quod.</p>
        </div>
    </div>
</div>
<br/>
<br/>

<br/>
<br/>
<div class="container">
    <div class="row">
        
        <div class="col-md-12">
            <h2>News</h2>
        </div>
        <br><br><br>
        
        <div class="cycle-slideshow composite-example" 
             data-cycle-fx="scrollHorz" 
             data-cycle-slides="> div"
             data-cycle-timeout="2000"
             data-cycle-pause-on-hover="true"
             style="height:500px;z-index:0">
          <?php foreach($result_set as $result){

            echo "<div class='index_news col-md-12'>";
            //echo "<div class='index_news row col-md-12'>";
            echo "<div class='index_news row'>";
            echo "    <div class='col-md-4'>";
            echo "        <img id='index_news_img' src='$result[3]' alt='event image'>";
            echo "    </div>";
            echo "    <div class='col-md-8'>";
            echo "       <h5 style='border-top:20px solid rgba(0, 0, 0,0)'>$result[1]</h5><br/>";
            echo        "<p> $result[2] </p>";
            echo '    </div>';
            echo '    </div>';
            echo '</div>';
            
          }?>
        </div>
    
    </div>

</div>

<?php require_once("components/footer.php");?>


