<?php
require_once "Mail.php";
include_once('conf/config.php');
$version = constant("VERSION_NUMBER");
$headerbar = "Apps v" . $version;
$homeurl = constant("HOME_URL");

if(array_key_exists('run', $_GET))
{
	$run = $_GET["run"];
}
else
{
	$run = 0; // 0 -> first run, 1-> get names, 2-> show results
}

$activeTop = array("inactive", "inactive", "inactive", "inactive");

if ($run == 0)
{
	$activeTop[0]="active";
	$body = <<< BODYCONT
	<div class="row">
		<div class="medium-12 columns"><h2>Javascript Playground</h2></div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<div class="panel">
				<h3>Who are we?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
				<div class="row">
					<div class="medium-6 columns">
						<h3>What we do</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
					</div>
					<div class="medium-6 columns">
						<h3>What sets us appart</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
					</div>
				</div>
				<hr></hr>
				<h3>Keep me up to date</h3>
				<div class="row">
					<div class="medium-6 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
					</div>
					<div class="medium-6 columns">
						<form method="POST">
							<div class="row">
								<div class="medium-6 columns">
									<label>First Name</label>
									 <input type="text" name="fname" placeholder="Jane" />
								</div>
								<div class="medium-6 columns">
									<label>Last Name</label>
									<input type="text" name="lname" placeholder="Liu" />
								</div>
							</div>
							<div class="row">
								<div class="medium-12 columns">
									<label>Your Email</label>
									<input type="email" name="email" placeholder="jane.liu@example.ca" />
								</div>
							</div>
							<div class="row">
								<div class="medium-12 columns submit-center">
									<input class="button" type="Submit" name="submit" value="Email Me with Updates" placeholder="jane.liu@example.ca" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

BODYCONT;
	
}
elseif ($run == 1)
{
	$activeTop[1]="active";
	$body = <<< BODYCONT
	<div class="row">
		<div class="medium-12 columns"><h2>Calculate Your Savings</h2></div>
	</div>
	<form action="" name="savcalc" >
		<div class="row">
				<div class="medium-12 columns">
					<h3>Savings Calculator</h3>
				</div>
			<div class="medium-6 columns">
				<div class="row">
					<div class="medium-12 columns">
						<p>We take your current and future needs into account to calculate your savings when you switch to a full-service Superfine Studios plan. We use some assumed values such as average length of time per update and average time to fix a technical issue. A few other factors are taken into account including average website costs based on competitor research and our regular website prices. For a full disclosure please <a href="mailto:hdpinto@superfinestudios.co">contact us</a> by email. <br /><em class="smalltext">While we try our best to keep this calculator as accurate and up-to-date as possible, we make no guarantee to its accuracy. This calculator is meant to help you find the best plan for your needs and does not make any warranty or offer price matching. For a personalized custom cost-saving quote please <a href="mailto:hdpinto@superfinestudios.co">contact us</a>.</em></p>
						<div class="panel">
							<p><em ><strong>Note: </strong><br /> We won't store anything you enter here. This calculator runs completely off of javascript and we never get to see the information you enter here unless you tell us. This tool is to help you calculate how much money we'll save you, and to help you choose the right plan for you. We promise. :)</em></p>
						</div>
						<fieldset>
							<legend>Your Savings Here</legend>
							<h2 id="SavingsPane">$9001</h2>
						</fieldset>
					</div>
				</div>
			</div>
			<div class="medium-6 columns">
				<div class="medium-6 columns">
					<label>Who's your webmaster:</label>
					<select id="ManagerSelect" name="manage" onchange="changeLabel(this.value);">
						<option value="man1">I am</option>
						<option value="man2">An employee</option>
						<option value="man3">I Outsource</option>
					</select>
				</div>
				<div class="medium-6 columns">
					<div class="row collapse">
						<label id="ManagerLabel">What is their time worth:</label>
						<div class="small-2 large-2 columns">
							<span class="prefix">$</span>
						</div>
						<div class="small-8 large-8 columns">
							<input type="number" name="wage" value="40" onkeyup="calcTotal();" />
						</div>
						<div class="small-2 large-2 columns">
							<span class="postfix">/hr</span>
						</div>
					</div>
				</div>
				<div class="medium-6 columns">
					<label>How many content updates do you expect to need per year?</label>
					<input type="number" name="updateNum" value="6" onkeyup="calcTotal();" />
				</div>
				<div class="medium-6 columns">
					<label>How many technical issues have you had in the last 12 months?</label>
					<input type="number" name="issuesNum" value="2" onkeyup="calcTotal();" />
				</div>
				<div class="medium-12 columns">
					<div class="row collapse">
						<label>How much does your current webhost charge per annum?</label>
						<div class="small-2 large-1 columns">
							<span class="prefix">$</span>
						</div>
						<div class="small-10 large-11 columns">
							<input type="number" name="cWebhost" value="135" onkeyup="calcTotal();" />
						</div>
					</div>
				</div>
				<div id="noPlan" class="medium-12 columns">
					
				</div>
				<div class="medium-12 columns">
					<div class="row collapse">
						<label>Pick your plan:</label>
						<div class="small-8 medium-8 columns">						
							<select id="SelectPlan" name="plan" onchange="changeDesc(this.value); calcTotal();">
								<option value="plan0">No Plan</option>
								<option value="plan1">Basic</option>
								<option value="plan2">Personal</option>
								<option value="plan3"selected="selected">Premiere</option>
								<option value="plan4">Premiere Plus</option>
								<option value="plan5">Ultimate</option>
							</select>
						</div>
						<div class="small-4 medium-4 columns">
							<span id="pricepanel" class="postfix"></span>
						</div>
					</div>
				</div>
				<div class="medium-12 columns">				
					<fieldset id="planpanel" class="row">
						
					</fieldset>	
					<br />
				</div>
			</div>
			<hr></hr>		
		</div>
		
		
		<div class="row">
			<div class="small-6 medium-6 columns"> 
				<a class="medium button" href="$homeurl/index.php?run=0">Return Home</a>
			</div>
			<div class="small-6 medium-6 columns submit-right"> 
				<input class="medium button" type="submit" name="submit" value="Send Me This Estimate" />
			</div>
		</div>
	</form>

BODYCONT;
}
elseif ($run == 2)
{
	
}
elseif ($run == 3)
{
	/*$activeTop[3]="active";
	$smtpUser = constant("SMTP_USERNAME");
	$smtpHost = constant("SMTP_HOST");
	$smtpPort = constant("SMTP_PORT");
	$smtpPass = constant("SMTP_PASS");
	$from = constant("MAIL_NAME") . " <" . constant("SMTP_FROM") . ">";
	$to = "Diogo Pinto <h.diogopinto@live.com>";
	$subject = "Email Test!";
	$emailBody = "Hi,\n\nLooks like EST's email function is working!"; 
	$params = array ('host' => constant("SMTP_HOST"),
		'port' => $smtpPort,
		'auth' => true,
		'username' => constant("SMTP_USERNAME"),
		'password' => $smtpPass);
	$headers = array ('From' => $from,
		'To' => $to,
		'Subject' => $subject);
	$smtp = Mail::factory('smtp', $params);
		
	$mail = $smtp->send($to, $headers, $emailBody); 

	if (PEAR::isError($mail)) {
		$mailstatus = $mail->getMessage();
	}
	else {
		$mailstatus = "Mail Function Disabled!";
	}*/
	$body = <<< BODYCONT

BODYCONT;
}
else
{
	$body = <<< BODYCONT
<div class="title">Function not yet made :(</div><br />
<a href="$homeurl/index.php?run=0"><div class="button">Return Home</div></a>
BODYCONT;
	
}


?>
<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<link rel="stylesheet" href="css/foundation-datepicker.css" />
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="js/vendor/modernizr.js"></script>
	<title><?=$headerbar;?></title>
	<meta name="description" content="<?=$headerbar;?>">
	<meta name="author" content="Superfine Studios">	
</head>

<body id="bimg">
	<div class="wrapper">
		<div class="main">
			<div class="sticky">
				<nav class="top-bar" data-topbar  data-topbar data-options="sticky_on: large">
					<ul class="title-area">
						<!-- Title Area -->
						<li class="name">
							<h1><a href="<?=$homeurl;?>"><?=$headerbar;?></a></h1>
						</li>
						<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
						<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>

					<section class="top-bar-section">

					<!-- Right Nav Section -->
						<ul class="right">
							<li class="divider hide-for-small"></li>
							<li class="<?=$activeTop[0]?>" ><a href="<?=$homeurl?>">Home</a></li>
							<li class="divider hide-for-small"></li>
							<li class="<?=$activeTop[1]?>" ><a href="<?=$homeurl?>/?run=1">Savings Calculator JS</a></li>
						</ul>
					</section>
				</nav>
			</div>
			<?=$body?>
		</div>
	</div>
	<div class="footer">
		Copyright © 2014 <a class="clink" href="http://www.superfinestudios.co/">Superfine Studios Inc.</a>, Made in <span class="MIC">Canada</span><br />
	</div>
	
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/fastclick.js"></script>
	<script src="js/foundation.min.js"></script>
	<script src="js/sav-calculator.js"></script>

	
	<script>
		$(document).foundation();
		$('#scope').foundation();		
	</script>
		
	<script>
		 $(document).ready(function(){
		 $.ajaxSetup({ cache: false });
		 changeDesc(document.getElementById('SelectPlan').value);
		 changeLabel(document.getElementById('ManagerSelect').value);
		 calcTotal();
		 });
	</script>	
</body>
</html>