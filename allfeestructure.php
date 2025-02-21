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

	<?php 

	$sql_programs_M ="select * from uecpl_program_fee_detail inner join uecpl_programs on uecpl_programs.programCode=uecpl_program_fee_detail.programCode where feeShift='M' and offeredat<>'' group by uecpl_program_fee_detail.programCode order by uecpl_programs.programCategoryID,uecpl_programs.programShortName ASC";  
            
    $result_programs_M = mysqli_query($con,$sql_programs_M);

	$sql_programs_E ="select * from uecpl_program_fee_detail inner join uecpl_programs on uecpl_programs.programCode=uecpl_program_fee_detail.programCode where feeShift='E' and offeredat<>'' group by uecpl_program_fee_detail.programCode order by uecpl_programs.programCategoryID,uecpl_programs.programShortName ASC";  
            
    $result_programs_E = mysqli_query($con,$sql_programs_E);
	


	?>
	<title>Fee Structure</title>

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
                    <?php include 'includes/left-side.php'; ?>
                    <div class="col-md-9 animate-box">
                        <h3>Fee Structures</h3>

                        <h4>
                            <a href="https://drive.google.com/file/d/13qmtj-MGyt92beYEUdhPh4xOJ0P-qdtT/view?usp=sharing" target="_blank">
                                Download Semester wise Fee Structure for all Programs
                            </a>
                        </h4>
                        
                        
                        <?php /*/ ?>
                        
                        <h4>Semester wise Fee Structure for the Programs offered in Morning</h4>
                        

                        <table width="100%" border="1">
                        	<tr class="back-black text-white">
                        		<th class="padding-5">Program</th>
                        		<th class="center padding-5">1st</th>
                        		<th class="center padding-5">2nd</th>
                        		<th class="center padding-5">3rd</th>
                        		<th class="center padding-5">4th</th>
                        		<th class="center padding-5">5th</th>
                        		<th class="center padding-5">6th</th>
                        		<th class="center padding-5">7th</th>
                        		<th class="center padding-5">8th</th>
                        	</tr>

    						<?php  
    							while($row_programs_M = mysqli_fetch_array($result_programs_M,MYSQLI_ASSOC)){

    								$programCode = $row_programs_M['programCode'];

    								$sql_programs_Name ="select * from uecpl_programs where programCode='$programCode'";  
								            
								    $result_programs_Name = mysqli_query($con,$sql_programs_Name);

								    $row_programs_Name = mysqli_fetch_array($result_programs_Name,MYSQLI_ASSOC);

    						?>

                        	<tr>
                        		<td class="padding-5"><?php echo $row_programs_Name['programShortName']; ?></td>



                        		<?php 
                        		$tdcount = 0;
                        		$sql_programs_semester_fee ="select * from uecpl_program_fee_detail where programCode='$programCode' and feeShift='M' and feeFinancialYear=2016 order by feeYear ASC limit 8";  
								            
								    $result_programs_semester_fee = mysqli_query($con,$sql_programs_semester_fee);

								    while($row_programs_semester_fee = mysqli_fetch_array($result_programs_semester_fee,MYSQLI_ASSOC)){
								 ?> 
                        		<td class="center"><?php echo $row_programs_semester_fee['feeAmount']; ?></td>

                        		<?php 
                        				$tdcount = $tdcount + 1;
                        			} 
                        		?>
                        		<?php 

                        			$requiredtd = 8 - $tdcount;


                        		 ?>
                        		 <?php for ($i=0; $i < $requiredtd; $i++) { ?>
                        		 	
                        		<td style="text-align: center;">-</td>
                        		<?php  } ?>
                        	</tr>

                        	<?php } ?>
                        </table>

                        <div class="clearfix">&nbsp;</div>






                        <h4>Semester wise Fee Structure for the Programs offered in Evening</h4>
                        

                        <table width="100%" border="1">
                        	<tr class="back-black text-white">
                        		<th class="padding-5">Program</th>
                        		<th class="center padding-5">1st</th>
                        		<th class="center padding-5">2nd</th>
                        		<th class="center padding-5">3rd</th>
                        		<th class="center padding-5">4th</th>
                        		<th class="center padding-5">5th</th>
                        		<th class="center padding-5">6th</th>
                        		<th class="center padding-5">7th</th>
                        		<th class="center padding-5">8th</th>
                        	</tr>

    						<?php  
    							while($row_programs_E = mysqli_fetch_array($result_programs_E,MYSQLI_ASSOC)){

    								$programCode = $row_programs_E['programCode'];

    								$sql_programs_Name ="select * from uecpl_programs where programCode='$programCode'";  
								            
								    $result_programs_Name = mysqli_query($con,$sql_programs_Name);

								    $row_programs_Name = mysqli_fetch_array($result_programs_Name,MYSQLI_ASSOC);

    						?>

                        	<tr>
                        		<td class="padding-5"><?php echo $row_programs_Name['programShortName']; ?></td>



                        		<?php 
                        		$tdcount = 0;
                        		$sql_programs_semester_fee ="select * from uecpl_program_fee_detail where programCode='$programCode' and feeShift='E' and feeFinancialYear=2016 order by feeYear ASC limit 8";  
								            
								    $result_programs_semester_fee = mysqli_query($con,$sql_programs_semester_fee);

								    while($row_programs_semester_fee = mysqli_fetch_array($result_programs_semester_fee,MYSQLI_ASSOC)){
								 ?> 
                        		<td class="center"><?php echo $row_programs_semester_fee['feeAmount']; ?></td>

                        		<?php 
                        				$tdcount = $tdcount + 1;
                        			} 
                        		?>
                        		<?php 

                        			$requiredtd = 8 - $tdcount;


                        		 ?>
                        		 <?php for ($i=0; $i < $requiredtd; $i++) { ?>
                        		 	
                        		<td style="text-align: center;">-</td>
                        		<?php  } ?>
                        	</tr>

                        	<?php } ?>
                        </table>
                        <?php /*/ ?>

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

