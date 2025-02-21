
<?php /*/ ?>
<!DOCTYPE html>
<html>
<head>
<script>
window.onload = function() {

    window.location.href = "https://ue.edu.pk/admissions/2019/";
}
</script>
</head>
<body>
</body>
</html>
<?php /*/ ?>

<?php 

  include('../srv-conn.php');
   $activee = 1;

    $sql_actdec="select * from actdec where id='$activee'";
    $result_actdec=mysqli_query($con,$sql_actdec);
    $row_actdec= (mysqli_fetch_array($result_actdec,MYSQLI_ASSOC));

    $act_actdec = $row_actdec['status'];

?>
<?php if (isset($_GET['dis']) || $act_actdec == "1") { ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Merit Lists 2019</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>


	<?php include 'includes/head.php'; ?>

	</head>
	<body>
		

	<div id="page">
		<nav class="ueitcell-nav" role="navigation">
			<?php //include 'includes/upper-menu.php'; ?>

<?php /*///////////////////////////////////////////////*/ ?>


			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<div class="upper-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-4">
							<ul class="ueitcell-social-icons">
								<!-- <li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-youtube"></i></a></li> -->
								<li><a href="https://www.facebook.com/ue.edu.pk.official/"><i class="fa fa-facebook-square" style="font-size:33px"></i></a></li>
								<li><a href="https://www.linkedin.com/school/ue-edu-pk/"><i class="fa fa-linkedin-square" style="font-size:33px"></i></a></li>
								<li><a href="https://twitter.com/ue_edu_pk"><i class="fa fa-twitter-square" style="font-size:33px"></i></a></li>
								<li><a href="https://www.youtube.com/c/UniversityofEducation"><i class="fa fa-youtube-square" style="font-size:33px"></i></a></li>
								<li><a href="https://www.instagram.com/ue.edu.pk/"><i class="fa fa-instagram" style="font-size:33px"></i></a></li>







							</ul>
						</div>
						<div class="col-xs-6 col-md-push-2 text-right">
							<!-- <p>
								<ul class="ueitcell-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p> -->
							<p class="btn-apply"><a href="<?php echo $basic_url; ?>">Home</a> | </p>
							<p class="btn-apply"><a href="http://gmail.ue.edu.pk/">UE Email</a> | </p>
							<p class="btn-apply"><a href="<?php echo $basic_url; ?>alumni.php">Alumni</a> | </p>
							<p class="btn-apply"><a href="<?php echo $basic_url; ?>contactus.php">Contact</a></p>
						</div>
					</div>
				</div>
			</div>


<?php /*///////////////////////////////////////////////*/ ?>













			<?php include 'includes/top-menu.php'; ?>
		</nav>

        <?php include 'includes/slider-internal.php'; ?>
		

		<?php /* Content starts from here /*/ ?>

        <div id="ueitcell-about">
            <div class="container">
                <div class="row">
                    <?php include 'includes/left-exam.php'; ?>
                    <div class="col-md-9 animate-box">     
 
 <?php 

   include('../srv-conn.php');
   $active = 1;

    $sql_batch="select * from uecpl_batch where status='$active'";
    $result_batch=mysqli_query($con,$sql_batch);
    $row_batch= (mysqli_fetch_array($result_batch,MYSQLI_ASSOC));

    $act_batch = $row_batch['batch'];

    
    $sql_listcount="select * from uecpl_listcount where status='$active'";
    $result_listcount=mysqli_query($con,$sql_listcount);
    $row_listcount= (mysqli_fetch_array($result_listcount,MYSQLI_ASSOC));

    $act_listcount = $row_listcount['lnum'];
    $act_listquota = $row_listcount['lquota'];


    // $act_listcount = "2";
    // $act_listquota = "Open Merit";


    

?>
                                 

					   
 <h3 style="text-align: center;"> <?php 

 if ($act_listcount=="1") {
 	echo $act_listcount."<sup>st</sup>";
 }elseif ($act_listcount=="2") {
 	echo $act_listcount."<sup>nd</sup>";
 }elseif ($act_listcount=="3") {
 	echo $act_listcount."<sup>rd</sup>";
 }else{
 	echo $act_listcount."<sup>th</sup>";
}
  ?> Merit Lists <?php echo $act_batch; ?> </h3>


<?php 


    $sql_campdiv="select * from uecpl_campdiv order by sortorder ASC";
    $result_campdiv=mysqli_query($con,$sql_campdiv);
    while ($row_campdiv= (mysqli_fetch_array($result_campdiv,MYSQLI_ASSOC))){

    $act_campdiv = $row_campdiv['campus'];






if (isset($_GET['dis'])) {
$sql_meritlist="SELECT * from uecpl_meritlist WHERE batch='$act_batch' and lquota='$act_listquota' and lnum='$act_listcount' and campus='$act_campdiv' order by studyprogram ASC";
}else{
    $sql_meritlist="SELECT * from uecpl_meritlist WHERE batch='$act_batch' and lquota='$act_listquota' and lnum='$act_listcount' and campus='$act_campdiv' and status='$active' order by studyprogram ASC";
}

    $result_meritlist=mysqli_query($con,$sql_meritlist);

    $result_meritlist_count=mysqli_num_rows($result_meritlist);

    if ($result_meritlist_count>=1) {
    	

    
?>


					    <h4 style="font-weight: bold;"><?php echo $act_campdiv; ?></h4>

					    <table width="100%" border="1">
						      <tbody>
						            <tr class="text-white" style="background: #4CAF50;">
						                  <th class="padding-5">Study Program</th>
						                  <th class="center padding-5" style="width: 100px;">Morning</th>
						                  <th class="center padding-5" style="width: 100px;">Evening</th>
						            </tr>

<?php 
    while ($row_meritlist= (mysqli_fetch_array($result_meritlist,MYSQLI_ASSOC))){ 
    	$morning = $row_meritlist['morning'];
    	$evening = $row_meritlist['evening'];
    	$studyprogram = $row_meritlist['studyprogram'];
    	$other = $row_meritlist['other'];


?>
						            <tr>
						            <?php if ($studyprogram=="other") { ?>
						            	<td class="padding-5" colspan="2"><?php echo $other; ?></td>
						            	<td class="padding-5" style="text-align: center; width: 100px;"><a href="<?php echo $morning; ?>" target="_blank">Download</a></td>
						            <?php }else{ ?>

						                  <td class="padding-5"><?php echo $studyprogram; ?></td>
						                  <?php if ($morning=="-") { ?>
						                  	<td class="center" style="width: 100px;">-</td>
						                  <?php }else{ ?>                                     
						                  <td class="center" style="width: 100px;"><a href="<?php echo $morning; ?>" target="_blank">Download</a></td>
						                  <?php } ?>
						                  <?php if ($evening=="-") { ?>
						                  	<td class="center" style="width: 100px;">-</td>
						                  <?php }else{ ?>                                     
						                  <td class="center" style="width: 100px;"><a href="<?php echo $evening; ?>" target="_blank">Download</a></td>
						                  <?php } ?>
						            <?php } ?>
						            </tr>
 <?php } ?>


						      </tbody>
						</table>

<br />

<?php } ///// merit list count closing ?>
<?php } ///// campus closing ?>




					    <br>

					    
<?php /*/ ?>
					    <h4 style="font-weight: bold;"><a href="https://drive.google.com/file/d/1f_IMC9LSGHV0osW7UPHSsd27_a1u866_/view?usp=sharing" target="_blank">Programs Not Offered</a></h4>
<?php /*/ ?>

			
          </div>


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


<?php } ?>