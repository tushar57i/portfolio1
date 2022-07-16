<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
  <body>
<!--Article-->
    <div class="article-list">
            <div class="container">
                <div class="intro text-center">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="javascript: history.go(-1)"><i class="fas fa-arrow-left fa-2x"></i></a></li>
                    &nbsp;
                    <li class="list-inline-item"><h2 class="text-center">My Portfolio</h2></li>
                  </ul>
                    <p class="text-center">Here's some exemple of my work. thanks for visiting here. :) </p>
                </div>
              <hr>
              <div class="row articles" id="getdata">
<?php 
    $conn = mysqli_connect("localhost", "root", "", "myportfolio");
    if(!$conn){
        echo "Not Connected";
    }

 
// Attempt View query execution
    $sql = "SELECT * FROM projects ORDER BY id desc";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>

                
                    <div class="col-sm-8 col-md-3 item border rounded"  style="margin: 0px 10px 10px 0px";><a href="#"><img class="img-fluid" src="../img/desk.jpg"></a>
                    <hr>
                        <h3 class="text-info"><?php echo $row['name'];?></h3>
                        <h6 class="name"><?php echo $row['cat'];?></h6>
                    <hr>
                        <p class="description"><?php echo $row['des'];?></p>
                    <br>
                        <div class="text-center">
                            <button class="btn btn-danger"><a class="nav-link text-white" href="<?php echo $row['git_link'];?>">View Source</a></button>
                    <br>
                    <br>
                        </div>
                    </div>


<?php

        }
    }
    
 ?>                       
                    </div>
               </div>


    <br>
    <br>
    <br>
    <br>
    <br>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

<!-- JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/nav.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/all.min.js"></script>
    <script type="text/javascript">
        AOS.init({
            duration: 1000,
            disable: false,
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
