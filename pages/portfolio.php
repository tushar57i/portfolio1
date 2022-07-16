<div class="row" id="portfolio">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1 class="text-center">Portfolio</h1>

<div class="row">



    <?php 
    $conn = mysqli_connect("localhost", "root", "", "myportfolio");
    if(!$conn){
        echo "Not Connected";
    }

 
// Attempt View query execution
    $sql = "SELECT * FROM projects ORDER BY id desc LIMIT 3";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>

    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" data-aos="fade-right">
        <div class="blog column text-center">
            <img src="https://images.pexels.com/photos/129441/pexels-photo-129441.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
            <h4><?php echo $row['name'];?></h4>
        </div>
    </div>

<?php

        }
    }
    
 ?>
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" data-aos="fade-left">
        <div class="blog column text-center">
            <a href="pages/portfolio_all.php" class="nav-link">
              <i class="fas fa-angle-double-right fa-3x"></i>
              <h4>See More</h4>
            </a>
        </div>
    </div>


</div>



    </div>
    <div class="col-md-2"></div>
</div>
