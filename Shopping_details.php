<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:57:36 GMT -->
<head>
	<?php
		include_once("css_file.php");
	?>	

			</head>
			<?php
			
		//header
		include_once("config.php");
		$id=$_GET['id'];
		
?>
	<body >
		<?php
		//header
			include_once("header.php");
		?>

			<!--Header starts version.1 ends-->
		
			<!--Travel Banner-->
			<div class="kode_banner">
				<?php
							$query="SELECT * FROM tbl_shopping where shop_id=$id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
									$shop_id=$row['shop_id'];
									$shop_name=$row['shop_name'];
									$shop_desc=$row['shop_desc'];
								    $shop_img=$row['shop_image'];
								    $shop_time=$row['shop_timings'];

						?>
				<!--Sub banner for inner pages-->
				<div class="kode_destination_banner overlay-30" style="background-image: url(<?php echo $shop_img?>);  >
				<?php }}?>
					
					<div class="container">
						<?php
							$query="SELECT * FROM tbl_shopping where shop_id=$id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
									$shop_id=$row['shop_id'];
									$shop_name=$row['shop_name'];
									$shop_desc=$row['shop_desc'];
								    $shop_img=$row['shop_image'];
								    $shop_time=$row['shop_timings'];

						?>
					
						<div class="kode_tour_caption">
							
							<h2 style="font-size: 45px;"><?php echo $shop_name;?></h2>
							<div class="kode_tour_weather">
								<div id="weather"></div>
								<div id="live-date"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }}?>
			<!--Travel Banner ends-->
			<div class="content" >
				<div class="kode_portfolio_info">
					<div class="sticky_nav_menu" id="mainNav">
						<div class="container">
							<ul class="kode_navi_fixed nav" style="margin-top:2%">
								<li class="active">
									<a class="js-scroll-trigger nav-icon" href="#scroll1">
									<i class="icon-opera"></i>
									<span>About</span>
									</a>
								</li>
								
								<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll2">
									<i class="icon-travel-7"></i>
									<span>Information</span>
									</a>
								</li>
								
								
							</ul>
						</div>
					</div>

					<section class="kf_culture_section" id="scroll1">
						<div class="container">
							<!--Travel heading-->
							<div class="heading text-align-center">
								<?php
							$query="SELECT * FROM tbl_shopping where shop_id=$id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
									$shop_id=$row['shop_id'];
									$shop_name=$row['shop_name'];
									$shop_desc=$row['shop_desc'];
								    $shop_img=$row['shop_image'];
								    $shop_time=$row['shop_timings'];
								    $shop_address=$row['shop_address'];

						?>
					

								<span>About</span>
								<h2 style="font-size: "><?php echo $shop_name;?></h2>
							</div>
							<div class="kf_culture_blog">
								<div class="kf_culture_content">
									
									<p><?php echo $shop_desc;?></p>
								<!--	<a href="#" class="btn-normal-1 effect2-color-1">See All Tour</a>-->
								</div>
								<div class="kf_culture_pictures">
									<figure>
										<div class="thumb1">
											<img src="images/mall1.jpg" alt="image here">
										</div>
										<div class="thumb2">
											<img src="images/mall2.jpg" alt="image here">
										</div>
									</figure>
								</div>
								
							</div>
						</div>
					</section>
					<section class="history-blog" id="scroll2" style="margin-bottom: 40px;">
						<div class="container">
							<div class="kode_history_blog">
								<div id="jp_container_1" role="application" aria-label="media player">
									<div class=""><img src="images/question.jpg" ></div>
								<!--	<div class="play-pause-btn">
										<button class="jp-play" ><i class="fa fa-play" aria-hidden="true"></i></button>
									</div>-->
								</div>
							</div> 
							<div class="kode_history_content">
								<div class="heading text-align-left">
									
									<h2>Information</h2>
								</div>
								<div class="kode-accordian-blog">
									<div class="accordian-title accordion" id="section1">
									</div>
									<div class="accordian-content">
										<b><h5>Address: </h5></b>
										<p><?php echo $shop_address=$row['shop_address'];?></p>
										<b><h5>Timings: </h5></b>
										<p><?php echo $shop_time=$row['shop_timings'];?></p>
									</div>
									
								</div>
							</div>
						</div>
					</section>
				<?php }}?>
					
					
				</div>
			</div>
		
		</div>


		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!-- jQuery UI LIB AJAX-->
		<script src="js/jquery-ui/jquery-ui.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- datepicker -->
		<script src="js/datepicker.js"></script>
		<!-- selectric -->
		<script src="js/selectric.js"></script>
		<!-- demo -->
		<script src="js/effects/demo.js"></script>
		<!-- demo1 -->
		<script src="js/effects/demo3.js"></script>
		<!-- easing -->
		<script src="js/effects/easings.js"></script>
		<!-- slick -->
		<script src="js/slick.js"></script>
		<!-- location-finder -->
		<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places&amp;key=AIzaSyDKVhf9e-mQfRtt_Zp2iG4ckYXKcuP25Ic"></script>
		<script src="js/map-pins.js"></script>
		<!-- rateing-stars -->
		<script src="js/rateing-stars.js"></script>
		<!-- WEATHER SCRIPTS -->
		<script src="js/weather.js"></script>
		<!-- videoplayer -->
		<script src="js/videoplay/jplayer.min.js"></script>
		<!-- accordian -->
		<script src="js/accordian.js"></script>
		<!-- scrolling-nav -->
		<script src="js/scrolling-nav.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<!-- tilt.jquery.min -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- jquery.zoom.min -->
		<script src="js/jquery.zoom.min.js"></script>
		<!-- jquery.ripples-min -->
		<script src="js/jquery.ripples-min.js"></script>
		<!-- prettyphoto -->
		<script src="js/prettyphoto/prettyphoto.js"></script>
		<!-- Responsive SCRIPTS -->
      	<script src="js/responsive-menu/responsive.jquery.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>

		<?php

include_once("footer.php");
?>
	</body>

<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:58:36 GMT -->
</html>

