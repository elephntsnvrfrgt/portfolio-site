<?php include 'head.php'; ?>
</head>
<body>

	<div id="outer-wrap">
	    <div id="inner-wrap">

	        <?php include 'header.php'; ?>

	        <div id="overlay"></div>

	        <div id="main" class="clearfix" role="main">

	        	<div class="column-8 float-left clear-both">
	        		<div class="width-control contents">
	        			<h2 class="title animate fadeIn one">Please say hello</h2>
	        			<p class="animate fadeIn two">Do so by emailing me at, hello@isaacmart[dot]in or using the contact form provided. I look forward to hearing from you.</p>

	        			<form class="email animate fadeIn two" action="mailer.php" method="post">

							<label>Name:</label>
							<input type="text" name="name" />

							<label>E-mail:</label>
							<input type="email" name="email" />

							<label>Subject:</label>
							<input type="text" name="subject" />

							<label>Message:</label>
							<textarea name="message" spellcheck="yes"></textarea>

							<label>Just to make sure you're human, what does 2 * 3 =</label>
							<input type="text" name="captcha" />

							<input class="send" type="submit" value="Send">

						</form>


	        		</div>
	        	</div>

	        </div>

		</div><!--/#inner-wrap-->
	</div><!--/#outer-wrap-->

<?php include 'footer.php'; ?>

</body>
</html>
