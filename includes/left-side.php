<div class="col-md-3 animate-box">

                        <nav class="navbar navbar-default sidebar" role="navigation">

                            <div class="container-fluid">

                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">

                                        <span class="sr-only">Toggle navigation</span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                    </button>

                                </div>

                                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

                                    <ul class="nav navbar-nav">

                                        

                                        <li><a href="<?php echo $basic_url; ?>admissions/2023/">Home</a></li>








<?php 


   $activee = 1;



    $sql_actdec="select status from actdec where id='$activee'";

    $result_actdec=mysqli_query($con,$sql_actdec);

    $row_actdec= (mysqli_fetch_array($result_actdec,MYSQLI_ASSOC));



    $act_actdec = $row_actdec['status'];




    if ($act_actdec == "0") {}else{ 







    $sql_quotal="select id from uecpl_quotalists where batch='Spring 2023' and  status='$activee'";

    $result_quotal=mysqli_query($con,$sql_quotal);

    $row_quotal_count= mysqli_num_rows($result_quotal);



?>





    <?php if ($row_quotal_count >= 1) { ?>


                                        <li><a href="https://ue.edu.pk/meritlistsquota.php">Quota Merit List Spring 2023</a></li>


    <?php } ?>
                                       

                                        <li><a href="https://ue.edu.pk/meritlists.php">Merit List Spring 2023</a></li>


<?php } ?>








                                     

                                     

                                        <li><a href="https://drive.google.com/file/d/18B_EKMxuijVW6C5OrOfDBTI4COtvK2e4/view?usp=share_link" target="_blank">Eligibility Criteria</a></li>

                                     

                                        <li><a href="https://ue.edu.pk/ruleandregulations.php" target="_blank">Rules and Regulations</a></li>






                                        <li><a href="<?php echo $basic_url; ?>admissions/2023/instructions.php">Instructions To Apply Online</a></li>



                                       
                                     <li><a href="<?php echo $basic_url; ?>admissions/2023/testinstructions.php">"Test/Interview" Instructions</a></li>
                                     

                                       

                                       

                                       

                                       

                                       

										<?php /*/ ?>

                                        

                                     

										<?php /*/ ?>





                                        <?php /*/ ?>




                                        <li>  <a href="https://drive.google.com/file/d/1AyHtRHp6vqKIb6Z551BKL1gKmCOPczkr/view?usp=share_link" target="_blank"> Admission Test Subjects Details </a> </li>
  



                                     <li><a href="https://admissions.uoel.edu.pk/" target="_blank" style="color: red; font-weight: bold;">Apply Here</a></li>
                                        

                                       


                                     <li><a href="https://drive.google.com/file/d/1iZhsxkLjlclb_k8NR8jaY0LkB31gtAns/view">Admission Calendar</a></li>

                                     


                                     <li><a href="<?php echo $basic_url; ?>admissions/2023/allfeestructure.php">Fee Structures</a></li>
                                    



                                        <li><a href="https://drive.google.com/file/d/1GHih86O-VZVfsX5OJOfH1KecQNiQEdog/view?usp=sharing" target="_blank">Eligibility Criteria</a></li>


                                        <li><a href="<?php echo $basic_url; ?>admissions/2023/instructions.php">Instructions To Apply Online</a></li>







                                        <li><a href="<?php echo $basic_url; ?>admissions/2023/testinstructions.php">"Test/Interview" Instructions</a></li>





                                     

                                        <li><a href="https://drive.google.com/file/d/1igWdVCtgz-BhfQ7872Jiz0bBA3f3VF1g/view?usp=sharing" target="_blank">Closing Merit Fall 2021</a></li>

                                        


                                     <li><a href="https://admissions.uoel.edu.pk/" target="_blank" style="color: red; font-weight: bold;">Apply Online</a></li>

                                     


                              <li><a href="<?php echo $basic_url; ?>admissions/2023/degreeprograms.php">Offered Degree Programs</a></li>

                                                

<li><a href="<?php echo $basic_url; ?>admissions/2023/instructions.php">Instructions for MS/MPhil/PhD</a></li>







                                        <li><a href="https://drive.google.com/file/d/1-nErP_A3OwxaNoDoNmBoLMJMjhXVPP0y/view?usp=sharing" target="_blank">Eligibility Criteria</a></li>

                                     







<li><a href="https://ue.edu.pk/admissions/2021/quotalists.php" style="color: red; font-weight: bold;">Quota Merit List</a></li> 





                                     

                                     

                                        <li><a href="https://drive.google.com/file/d/1MwJkTIwp4PYFwfva8B2BnjAqfP9lUmCc/view?usp=sharing" target="_blank">Closing Merit Fall 2020</a></li>

















                                        







                                     

                                     <li><a href="http://web.ue.edu.pk/apply/" target="_blank">Apply Online</a></li>



                                     

<li><a href="https://ue.edu.pk/meritlists.php" style="color: red; font-weight: bold;">Merit Lists Fall 2021</a></li>

                                        



                                     <li><a href="<?php echo $basic_url; ?>admissions/2021/instructions.php">Interview Instructions for MS/MPhil/PhD</a></li>

                                     

                                     

<li><a href="https://ue.edu.pk/admissions/2021/quotalists.php" style="color: red; font-weight: bold;">Quota Merit List</a></li> 

















<li><a href="<?php echo $basic_url; ?>2019/meritlists.php" style="color: red; font-weight: bold;">5<sup>th</sup> Merit List</a></li>









                                        <li><a href="https://www.ue.edu.pk/beta/2019/admission_test2019.php" target="_blank" style="color: red; font-weight: bold;">MPhil PhD Admission Test Detail</a></li>

                                        

                                        

                                        

                                        

                                        <li><a href="<?php echo $basic_url; ?>2019/instructions.php">Instructions To Apply Online</a></li>

                                        

                                        



                                        <li><a href="<?php echo $basic_url; ?>2019/admission_test_result.php" style="color: red; font-weight: bold;">Admission Test Result</a></li>  



                                         <li><a href="<?php echo $basic_url; ?>2019/downloads/Boys_hostel_admission_form.docx">Boys hostel admission form</a></li>

                                        <li><a href="<?php echo $basic_url; ?>2019/downloads/Girls_hostel_admission_form.docx">Girls hostel admission form</a></li>

<?php /*/ ?>

                                      





                                       <?php /*/ ?>  <li><a href="<?php echo $basic_url; ?>2019/ruleandregulations.php">Rules and Regulations</a></li>

                                        <li><a href="<?php echo $basic_url; ?>2019/degreeprograms.php">Degree Programs</a></li>

                                        <li><a href="<?php echo $basic_url; ?>2019/phdeducation.php">Post Graduate Programs</a></li>

                                        <li><a href="<?php echo $basic_url; ?>2019/allfeestructure.php">Fee Structures</a></li>

                                        

                                       

                                        <li><a href="https://drive.google.com/file/d/1OLhwZYuq-i2VN8IQwDhAnTortVpd50wk/view?usp=sharing" target="_blank">Equivalence Form</a></li>



                                        <li><a href="https://drive.google.com/file/d/1M5H6rnN4G-3rhzi5xFh6qgdS9kdS7e1n/view?usp=sharing" target="_blank">Merit Calculation</a></li>

                                        <li><a href="https://drive.google.com/file/d/1wNAOHyPWa7H3q8Eoh_3UdehQ8ztRitmi/view?usp=sharing" target="_blank">Merit List 2018</a></li>

                                        

                                        <li><a href="https://drive.google.com/file/d/1MaCirEK2ge0HU-zH4SKOfkc8spL3ZJo7/view?usp=sharing" target="_blank">MPhil PhD Entry Test Detail</a></li>

                                        <?php /*/ ?>

















                                        







                                        

                                        

                                        







                                    </ul>

                                </div>

                            </div>

                        </nav>

                    </div>