<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h2 class="text-center">Projects</h2><hr>
		<!--Article-->
    	<div class="article-list">
            <div class="row articles">
<?php 
	$conn = mysqli_connect("localhost", "root", "", "myportfolio");
	if(!$conn){
		echo "Not Connected";
	}

 
//View query
	$sql = "SELECT * FROM projects;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
?>
                    <div class="col-sm-8 col-md-3 item border rounded" style="margin: 0 10px 0px 0;"><a href="#"><img class="img-fluid" src="../img/desk.jpg"></a>
                        <h3 class="name"><?php echo $row['name'];?></h3>
						<h5>Under: <?php echo $row['cat'];?></h5>
                        <hr>
                        <p class="description"><?php echo $row['des'];?></p>
                        <div class="text-center" style="margin-bottom: 10px;">
                        	<a class="btn btn-warning" href="<?php echo'pages/edit_post.php?$row[id]';?>">Edit</a>
                        	<a class="btn btn-danger" href="<?php echo'pages/delete_post.php?$_GET[id]';?>">Delete</a>
                        </div>
                    </div>
<?php

		}
	}
	
 ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	</div>
	<div class="col-md-1"></div>
</div>




	
			
