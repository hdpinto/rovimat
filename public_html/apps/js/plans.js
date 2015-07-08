function getPlanDesc()
{
	var plan1 = <xml>
		<div class="row">
							<div class="medium-6 columns">
								<h5>Website type</h5>
								<p id="feat1">3 page brochure site</p>
							</div>
							<div class="medium-6 columns">
								<h5>Hosting</h5>
								<p id="feat2">Basic hosting package included</p>
							</div>
						</div>
						<div class="row">
							<div class="medium-6 columns">
								<h5>Updates</h5>
								<p id="feat3">Total of 6 updates over two years <br /><em class="smalltext">Additional updates cost $45 each</em></p>
							</div>
							<div class="medium-6 columns">
								<h5>Support</h5>
								<p id="feat4">Total of 7 updates over two years</p>
							</div>
						</div>
						<div class="row">
							<div class="medium-6 columns">
								<h5>Term</h5>
								<p id="feat5">Two year term</p>
							</div>
							<div class="medium-6 columns">
								<h5></h5>
								<p id="feat6">Two year term</p>
							</div>
						</div>
</xml>;
return plan1.toString;
}