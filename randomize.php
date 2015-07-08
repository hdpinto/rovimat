<?php

$lastNum = $_GET['lastNum'];

$review = array(
	"We can't say enough good things about ROVIMAT. They deliver as promised and within budget. They completely stand behind their work product and are quick to follow up. The workmanship is top notch. Not only are they good contractors, they also have some decent design ideas. They also have a huge network of subcontractors to choose from, which means that your job will not be delayed.",
	"The new space we have gained on the main floor and in the basement has been wonderful. We have bright windows and skylights at the back of our house with a great sitting room totally opened up to a great kitchen with an amazing 4' by 8' foot marble topped island!",
	"Both Vitor and Rolando were very helpful, giving us lots of good advice when consulted. Any issues that arose were dealt with quickly and to our satisfaction. The job went smoothly, and was completed on time due to their fantastic organization. All the members of their work crew were friendly and their work was excellent. Either Rolando or Vitor were on site each day to inspect the work and called a week after completion to ensure that everything was satisfactory.",
	"We are totally delighted with the result which definitely is magazine standard. At all stages of the build they were informative and helpful. The work is done to a high standard and well managed. Never did the house look like a bomb site and all the trades were professional and friendly. We were informed of all difficulties and they helped us overcome them. They were on time and on budget. When we buy another place and need to do some work I will be calling them again. We highly recommend Rovimat.",
	"Rovimat's work exceeded our expectations!!! Rolando's suggestions to maximize space, efficiency, and flow in our cozy space made our masterfully renovated home functional as well. Vitor's attention to detail allowed us to make those subtle but distinctive personalized touches that made the space truly our own. Our friends and family were blown away with the final results. If you are looking for excellent customer service and unparalleled quality and craftsmanship then look no further, Rovimat is for you!",
	"Rovimat (Rolando, Vitor and team) were excellent value, stayed on budget, time and were super friendly and great listeners, I'm super picky and their patience was greatly appreciated! They really made our vision come to life, we really couldn't have asked for more in a contracting team! You hear about how stressful reno's can be, honestly Rolando and Vitor actually made the processes enjoyable and exciting, we are so thankful we found them!",
	"We have been using ( Rovimat Construction ) for past 6 Years to do additions removing Walls Flooring plumbing, electrical, basically everything that requires in renovation, they have an excellent team of each trade that specializes to get the job done right and professionally.",
	"[Rovimat Construction] first did some work for us when we renovated our family bathroom. They did such a great job, we called them back a few years later to add an ensuite bathroom to our master bedroom. We couldn't be happier with the work. In addition to great work and professionalism, the team goes above and beyond. Our bathroom project was started in the middle of winter. Rolando's partner, Vitor, shoveled my steps and help me dig my car during a really bad winter storm.",
	"This was our first home renovation experience, and Rolando and Victor made the experience painless. I cant say anything but great things! The project consistent of a full basement rebuild, from new floors, drains, walls, electrical, water lines, bathroom etc; along with a new kitchen, and bathroom on main floor. Everything came together very well and looks fantastic.",
	"Thank goodness Rovimat got recommended to me. Both Rolando and Victor went out of their way to ensure that the project ran as efficiently as possible, on time and on budget. They are very organized and professional and their work is excellent. I would highly recommend them and woul use them again.",
	"We were recommended Rovimat through our designers to complete the total renovation of the two bathrooms. Although we were anxious about our first big renovation, Rolando and Vitor guided us through every step of the process & put us at ease with their knowledge. They were understanding & responsive to our needs, easy to contact and provided expert & practical advice.",
	);

$name = array(
	"Shari",
	"Duncan",
	"Fran",
	"Peter",
	"Steven",
	"David",
	"Sky Kitchens",
	"Diane",
	"Jason",
	"Annabel",
	"Kris",
	);
$reviewType = array(
	"trustedpros",
	"trustedpros",
	"trustedpros",
	"trustedpros",
	"trustedpros",
	"trustedpros",
	"homestars",
	"homestars",
	"homestars",
	"homestars",
	"homestars",
	);
$score = array(
	"4.7 out of 5",
	"4.8 out of 5",
	"5 out of 5",
	"5 out of 5",
	"5 out of 5",
	"5 out of 5",
	"10 out of 10",
	"10 out of 10",
	"10 out of 10",
	"10 out of 10",
	"10 out of 10",
	);

$siteURL = array(
	'homestars' => "http://rovimat.homestars.com/",
	'trustedpros' => "https://trustedpros.ca/company/rovimat-construction-ltd",
	);

$logoURL = array(
	'homestars' => "img/logos/homestars_black.png",
	'trustedpros' => "img/logos/trustedpros.png",
	);


$dn = rand(0, 10);

if ($lastNum <= -2)
{
	$dn = rand(0, 10);
}
else
{
	if ( ($lastNum >= 0) && ($lastNum <= 10))
	{
		$dn = $lastNum;
	}
	elseif ($lastNum == -1 ) 
	{
		$dn = 10;
	}
	elseif ($lastNum == 11) 
	{
		$dn = 0;
	}
}
$prev = $dn - 1;
$nex = $dn + 1
?>

<fieldset>
	<legend>Our Reviews</legend>
	<div class="row">
	  <div class="small-6 columns">
	    <h4><?php echo $name[$dn]; ?></h4>
	    <span> <strong><?php echo $score[$dn]; ?></strong> </span>
	  </div>
	  <div class="small-6 columns">
	    <a href=<?php echo '"' . $siteURL[$reviewType[$dn]] . '"'; ?>><img class="display-blocking" id="rev_logo" src=<?php echo '"' . $logoURL[$reviewType[$dn]] . '"'; ?> title="See Full Review"></a> <br />
	  </div>
	</div>
	<hr />
	<p><?php echo $review[$dn]; ?></p>
	<div class="small-12 columns">
		<div class="show-for-medium-up">
			<div class="small-3 columns">
				<div class="arrow-left" aria-label="previous review" onclick=<?php echo '"getReview(\'reviewPane\', ' . $prev . '); "' ?>></div>
			</div>
			<div class="small-6 columns">
				<a href=<?php echo '"' . $siteURL[$reviewType[$dn]] . '"'; ?>><div class="rp button max-width">See All</div></a>
			</div>
			<div class="small-3 columns">
				<div class="arrow-right" aria-label="next review" onclick=<?php echo '"getReview(\'reviewPane\', ' . $nex . '); "' ?>></div>
			</div>
		</div>
		<div class="show-for-small-only">
			<div class="small-3 columns">
				<div class="arrow-left-small" aria-label="previous review" onclick=<?php echo '"getReview(\'reviewPane\', ' . $prev . '); "' ?>></div>
			</div>
			<div class="small-6 columns">
				<a href=<?php echo '"' . $siteURL[$reviewType[$dn]] . '"'; ?>><div class="rp-small button max-width">See All</div></a>
			</div>
			<div class="small-3 columns">
				<div class="arrow-right-small" aria-label="next review" onclick=<?php echo '"getReview(\'reviewPane\', ' . $nex . '); "' ?>></div>
			</div>
		</div>
<!--			<br /><br /><br /><span class="show-for-medium-up"><br /></span>
		<hr />-->
	</div>
</fieldset>







