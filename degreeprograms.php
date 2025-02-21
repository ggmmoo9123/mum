<!DOCTYPE HTML>
<html>
	<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<?php include 'includes/head.php'; ?>

	<title>Degree Programs</title>

	</head>
	<body>
		

	<div id="page">
		<nav class="ueitcell-nav" role="navigation">
			<?php include 'includes/upper-menu.php'; ?>
			<?php include 'includes/top-menu.php'; ?>
		</nav>

        <?php include 'includes/slider-internal.php'; ?>
		

		<?php /*/ Content starts from here /*/ ?>

        <div id="ueitcell-about">
            <div class="container">
                <div class="row">
                    <?php include 'includes/left-exam.php'; ?>
                    <div class="col-md-9 animate-box">
                        <h3>Offered Degree Programs in Spring 2022</h3>
            
<?php /*/ ?>


	<?php 

	$sql_campus_program="select * from uecpl_programs where offeredat<>'' and programCategoryID=1 and status=1";  
            
    $result_campus_program=mysqli_query($con,$sql_campus_program);
	


	?>
                        <h4>BS Programs</h4>

                        <ul>
                        <?php while($row_campus_program = mysqli_fetch_array($result_campus_program,MYSQLI_ASSOC)){ ?>
                        	
                        	<li>
                        		<a href="<?php echo $basic_url; ?>programs.php?id=<?php echo $row_campus_program['programCode']; ?>">
                        			<?php echo $row_campus_program['programShortName']; ?>
                        		</a>
                        	</li>
                        
                        <?php } ?>
                        </ul>
                        
<?php /*/ ?>                        
                  

	<?php 

	$sql_campus_program="select * from uecpl_programs where offeredat<>'' and programCategoryID=2 and status=1";  
            
    $result_campus_program=mysqli_query($con,$sql_campus_program);
	


	?>
                        <h4>MSc Programs</h4>


                        <ul>
                        <?php while($row_campus_program = mysqli_fetch_array($result_campus_program,MYSQLI_ASSOC)){ ?>
                        	
                        	<li>
                        		<a href="<?php echo $basic_url; ?>programs.php?id=<?php echo $row_campus_program['programCode']; ?>">
                        			<?php echo $row_campus_program['programShortName']; ?>
                        		</a>
                        	</li>
                        
                        <?php } ?>
                        </ul>







                        	<?php 

	$sql_campus_program="select * from uecpl_programs where offeredat<>'' and programCategoryID=3 and status=1";  
            
    $result_campus_program=mysqli_query($con,$sql_campus_program);
	


	?>
                        <h4>MS/MPhil Programs</h4>

                        <ul>
                        <?php while($row_campus_program = mysqli_fetch_array($result_campus_program,MYSQLI_ASSOC)){ ?>
                        	
                        	<li>
                        		<a href="<?php echo $basic_url; ?>programs.php?id=<?php echo $row_campus_program['programCode']; ?>">
                        			<?php echo $row_campus_program['programShortName']; ?>
                        		</a>
                        	</li>
                        
                        <?php } ?>
                        </ul>

	<?php 

	$sql_campus_program="select * from uecpl_programs where offeredat<>'' and programCategoryID=4 and status=1";  
            
    $result_campus_program=mysqli_query($con,$sql_campus_program);
	


	?>
                        <h4>PhD Programs</h4>

                        <ul>
                        <?php while($row_campus_program = mysqli_fetch_array($result_campus_program,MYSQLI_ASSOC)){ ?>
                        	
                        	<li>
                        		<a href="<?php echo $basic_url; ?>programs.php?id=<?php echo $row_campus_program['programCode']; ?>">
                        			<?php echo $row_campus_program['programShortName']; ?>
                        		</a>
                        	</li>
                        
                        <?php } ?>
                        </ul>




                    </div>
                </div>
            </div>
        </div>

		<?php /*/ Content starts from here /*/ ?>
		<?php include 'includes/footer.php'; ?>
	</div>
	
		<?php include 'includes/foot.php'; ?>
	</body>
</html>

