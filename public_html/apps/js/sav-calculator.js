
var plans = { 
	plan0: { hosting: 0, updates: 0, fixes: 0, cost: 0, siteBalance: 2000 }, 
	plan1: { hosting: 1, updates: 0, fixes: 0, cost: 34.95, siteBalance: 895 }, 
	plan2: { hosting: 1, updates: 3, fixes: 2, cost: 39.95, siteBalance: 895 },
	plan3: { hosting: 2, updates: 12, fixes: 6, cost: 49.95, siteBalance: 1350 },
	plan4: { hosting: 3, updates: 9001, fixes: 12, cost: 74.95, siteBalance: 1500 },
	plan5: { hosting: 3, updates: 9001, fixes: 9001, cost: 99.95, siteBalance: 2000 }	
}

function changeDesc(plan)
{
	if (plan == "plan0")
	{
		$('#planpanel').load('assets/plan0.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].siteBalance + "</strong>";
		$('#noPlan').load('assets/noPlanChoice.html');
	}
	else if (plan == "plan1")
	{
		$('#planpanel').load('assets/plan1.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].cost + "/mo</strong>";
		document.getElementById('noPlan').innerHTML = "";
	}
	else if (plan == "plan2")
	{
		$('#planpanel').load('assets/plan2.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].cost + "/mo</strong>";
		document.getElementById('noPlan').innerHTML = "";
	}
	else if (plan == "plan3")
	{
		$('#planpanel').load('assets/plan3.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].cost + "/mo</strong>";
		document.getElementById('noPlan').innerHTML = "";
	}
	else if (plan == "plan4")
	{
		$('#planpanel').load('assets/plan4.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].cost + "/mo</strong>";
		document.getElementById('noPlan').innerHTML = "";
	}
	else if (plan == "plan5")
	{
		$('#planpanel').load('assets/plan5.html');
		document.getElementById('pricepanel').innerHTML = "<strong>$" + plans[plan].cost + "/mo</strong>";
		document.getElementById('noPlan').innerHTML = "";
	}
}

function changeLabel(manager)
{
	if (manager == "man1")
	{
		document.getElementById('ManagerLabel').innerHTML = "What is your time worth:";
	}
	else
	{
		document.getElementById('ManagerLabel').innerHTML = "What is their time worth:";
	}
}

function calcTotal()
{


	
	
	var calcform = document.forms['savcalc'];
	
	var wage = calcform.elements["wage"].value;
	var esUpdate = calcform.elements["updateNum"].value;
	var esIssue = calcform.elements["issuesNum"].value;
	var currWebhost = calcform.elements["cWebhost"].value;
	var myPlan = calcform.elements["plan"].value;
	
	var normalPrice;
	var updateExtra;
	var issueExtra;
	var savings;
	var sfPrice;
	var updateTime = 2;
	var minIssues = 2;
	var issueTime = 6;
	var aveHosting = 99;
	
	esUpdate = esUpdate * 2;
	esissue = esIssue * 2;
	
	if (myPlan == "plan0")
	{
		var labor = calcform.elements["updateLabor"].value;
	}
	else
	{
		normalPrice = plans[myPlan].siteBalance + ( esUpdate * updateTime * wage ) + ( currWebhost * 2 ) + ( esIssue * wage );

		if (esUpdate <= plans[myPlan].updates)
		{
			updateExtra = 0;
		}
		else
		{
			updateExtra = esUpdate - plans[myPlan].updates;
		}
		
		if (esIssue <= plans[myPlan].fixes)
		{
			issueExtra = 0;
		}
		else
		{
			issueExtra = esIssue - plans[myPlan].fixes;
		}
	
		
		sfPrice = ( plans[myPlan].cost * 24 ) + ( updateExtra * 45 ) + ( issueExtra * 60 );
		
		
	}
	
	savings = (normalPrice - sfPrice).toFixed(2);
	document.getElementById('SavingsPane').innerHTML="$"+savings;

}