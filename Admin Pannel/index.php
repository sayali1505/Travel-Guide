<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/index.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->

<head>
    <title> Admin Panel </title>
   <?php include_once("css_file.php");  ?>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
  <?php include_once("header.php") ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        
            <?php include_once("sidebar.php") ?>
            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>
                   <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_city ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
                <!--== DASHBOARD INFO ==-->
                <div class="ad-v2-hom-info">
					<div class="ad-v2-hom-info-inn">
						<ul>
							<li>
								<div class="ad-hom-box ad-hom-box-1">
									<span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i>Total Cities</p>
									<h3><?php echo $rowcount; ?></h3>
									</div>
								</div>
							</li>
							<li>
            <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_attractions ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
								<div class="ad-hom-box ad-hom-box-2">
									<span class="ad-hom-col-com ad-hom-col-2"><i class="fa fa-usd"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i>Attraction</p>
									<h3><?php echo $rowcount; ?></h3>
									</div>
								</div>
							</li>
<?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_hospital ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Total Hospitals</p>
                                    <h3><?php echo $rowcount; ?></h3>
                                    </div>
                                </div>
                            </li>

<?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_restaurant ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Restaurants</p>
                                    <h3><?php echo $rowcount; ?></h3>
                                    </div>
                                </div>
                            </li>


<?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_college ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
                            <li>
                                <div class="ad-hom-box ad-hom-box-1">
                                    <span class="ad-hom-col-com ad-hom-col-1"><i class="fa fa-bar-chart"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Total Colleges</p>
                                    <h3><?php echo $rowcount; ?></h3>
                                    </div>
                                </div>
                            </li>


                            <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_registration ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
           
							<li>
								<div class="ad-hom-box ad-hom-box-3">
									<span class="ad-hom-col-com ad-hom-col-3"><i class="fa fa-address-card-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Users</p>
									<h3><?php echo $rowcount; ?></h3>
									</div>
								</div>
							</li>
                              <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_enquiry ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
							<li>
								<div class="ad-hom-box ad-hom-box-4">
									<span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
									<div class="ad-hom-view-com">
									<p><i class="fa  fa-arrow-up up"></i> Enquiry</p>
									<h3><?php echo $rowcount; ?></h3>
									</div>
								</div>
							</li>
                             <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_feedback ";  
                
                if($result = mysqli_query($conn,$query))
                {  
                            $rowcount=mysqli_num_rows($result);
                }
                mysqli_free_result($result);

                  ?>
                            <li>
                                <div class="ad-hom-box ad-hom-box-4">
                                    <span class="ad-hom-col-com ad-hom-col-4"><i class="fa fa-envelope-open-o"></i></span>
                                    <div class="ad-hom-view-com">
                                    <p><i class="fa  fa-arrow-up up"></i>Feedback</p>
                                    <h3><?php echo $rowcount; ?></h3>
                                    </div>
                                </div>
                            </li>
						</ul>
					</div>
                </div>
               
            

        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/index.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>