<?php
/* Set e-mail recipient */
$myemail = "hello@isaacmart.in";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "- Enter your name");
$subject = check_input($_POST['subject'], "- Enter a subject");
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "- Write your message");
$captcha = check_input($_POST['captcha']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("- E-mail address not valid");
}

if (!preg_match("/6/", $captcha))
{
show_error("- Oops, check your math.");
}

/* Let's prepare the message for the e-mail */
$message = "

Name: $name
E-mail: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message, $name);

/* Redirect visitor to the thank you page */
header('Location: thanks.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<?php include 'head.php'; ?>

<body>

	<div id="outer-wrap">
	    <div id="inner-wrap">

	        <?php include 'header.php'; ?>
	        
	        <div id="overlay"></div>

	        <div id="main" class="clearfix" role="main">

	        	<div class="column-8 float-left clear-both">
	        		<div class="width-control contents">
	        			<h2 class="title">Son of a...</h2>

						<p>Please correct the following error:</p>
						<h4 class="error"><?php echo $myError; ?></h4>
						<p>Hit the back button and try again.</p>

					</div>
	        	</div>

	        </div>

		</div><!--/#inner-wrap-->
	</div><!--/#outer-wrap-->

<?php include 'footer.php'; ?>

</body>
</html>
<?php
exit();
}
?>