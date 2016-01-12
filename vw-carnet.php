<?php include 'head.php'; ?>

</head>
<body>

	<div id="outer-wrap">
	    <div id="inner-wrap">

	        <?php include 'header.php'; ?>

	        <div id="overlay">
	        </div>
	        <div id="main" class="clearfix" role="main">

	        	<!-- project description -->

	        	<div class="column-4 float-left">
	        		<div class="contents">

	        			<h3 class="title">VW Car-Net</h3>

	        			<p>
									Car-Net is a service by Volkswagen that allows you to remotely interact with your car from your device.
        				</p>
        				<p>
									This case study is a fork of some pitch work I was apart of at Razorfish. The product redesign was a small part of the pitch, so afterwards I went back and thought more about what could make it a more interesting and useful tool.
	        			</p>
	        			<p>
	        				<strong>Client:</strong> Volkswagen Car-Net
	        			</p>
								<p>
									Pitch / Personal Work
								</p>

	        		</div>
	        	</div>

	        	<!-- project images & explanation -->

	        	<div class="column-8 two-thirds float-left width-control-project">
	        		<div class="contents">

			        	<!-- intro -->

	        			<img alt="" src="assets/work/vw-carnet/vw-01-intro.jpg" />
	        			<p class="long caption">
									A connected car should be just that: connected. It should be smart and adapt to you. It should learn your general behavior, yet allow for detailed control. And in a multi-device world, it shouldn’t care which one you’re using.
								</p>


			        <!-- Home-->

			        	<h2 class="underline img-title">App</h2>
			        	<h3 class="subtitle-title">Home</h3>

								<p class="p1">
									The home screen (I guess “dashboard” would be an appropriate label) gives a quick overview of your vehicle and the general app functionality. It is modular in order to allow for pertinent information to be injected easily. In the example below, it’s time for an oil change. The module is plopped in with appointments that fit your schedule.
								</p>
								<p class="p2">
									Another example scenario could be your parking location. The module could show a map of your current location in relation to your parked vehicle, giving you directions on how to get there.
								</p>

								<img class="" alt="" src="assets/work/vw-carnet/vw-02-home.jpg" />


								<!-- Menu -->

								<h3 class="section-div subtitle">Menu</h3>

								<img class="" alt="" src="assets/work/vw-carnet/vw-03-menu.jpg" />


			        	<!-- Remote Key -->

			        	<h3 class="section-div subtitle">Remote Key</h3>

								<p class="p1 p2">
									The need for physical keys seems to be dwindling, so why not get rid of a fob too? Here you have all the functionality, plus much more.
								</p>

			        	<img class="" alt="" src="assets/work/vw-carnet/vw-04-remote.jpg" />


			        	<!-- Destinations -->

			        	<h3 class="section-div subtitle">Destinations</h3>

								<p class="p1 p2">
									Destinations would allow for linking existing accounts (such as Google) for easier maintainability. And being smarter, it could remind you where you parked, when it’s time to head to work, or more importantly, how to get home on the fastest route. Push those directions to the vehicle infotainment so it’s ready to go when you are.
								</p>

			        	<img class="" alt="" src="assets/work/vw-carnet/vw-05-destinations-A.jpg" />

								<img class="no-title" alt="" src="assets/work/vw-carnet/vw-05-destinations-B.jpg" />


			        	<!-- Tracking -->

			        	<h3 class="section-div subtitle">Tracking</h3>

								<p class="p1 p2">
									Boundaries allow for alerts to be pushed when the vehicle enters or exits a geofence. It could keep a watchful eye on your vehicle when it’s in the hands of another. Or maybe alert others when you’re heading home from work so you can focus on driving, not texting.
								</p>

			        	<img class="" alt="" src="assets/work/vw-carnet/vw-06-tracking-A.jpg" />

								<p>
									Speed alerts help keep the lead foots of the family in check as they drive your vehicle. There are two kinds: Relative and Fixed. Relative alerts are dynamic. They depend on the current road’s posted speed and push an alert accordingly. If your alert is set to 10 mph and the posted speed is 40 mph, then you’ll get an alert if Johnny Teenager goes 50+ mph.
								</p>
								<p class="p2">
									Fixed alerts set a specified maximum speed at which the alert is sent. If the alert is set to 80 mph, it doesn’t matter what the posted speed is, as long as the vehicle stays under 80, the alert won’t be triggered. Fixed alerts could be used as Johnny proves responsibility and gains more experience driving. You may trust him to follow the speed limits, but want to make sure he’s not taking your vehicle to the local race track.
								</p>

			        	<img class="" alt="" src="assets/work/vw-carnet/vw-06-tracking-B.jpg" />


								<!-- Health -->

			        	<h3 class="section-div subtitle">Health</h3>

								<p class="p1 p2">
									The Health Report enables the owner, whether they’re familiar with car mechanics or not, to be proactive in a maintenance schedule. If/when the time comes to do more serious work, the owner sees the same diagnosis the mechanic has and opens up clearer communication. You’re still free to make noises as you explain what’s wrong to your mechanic.
								</p>

			        	<img class="" alt="" src="assets/work/vw-carnet/vw-07-health.jpg" />



					</div>
				</div>

	        	<!-- previous & next -->

	        	<?php include 'pagination.php' ;?>

	        	<div class="thumb-container">
					<?php include 'thumbnails.php';?>
				</div>

	    	</div><!--main-->
		</div><!--/#inner-wrap-->

	</div><!--/#outer-wrap-->

<?php include 'footer.php'; ?>

</body>
</html>
