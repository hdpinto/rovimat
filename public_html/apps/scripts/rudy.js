function addInput(form) 
{
	document.getElementById('jsinput').innerHTML = "<p>This executes</p>";
	amount = parseInt(form.name.value);
	alert(amount);
	if (amount < 3 && amount != 0)
	{
		alert("Must have at least 3 participants. Would be much of a \"secret\" if you knew who your gift giver was \;\)")
	}
	else if (amount >= 3)
	{
		document.getElementById('form').innerHTML += "<input type='text' name='name' placeholder='Name' /><br />";
		fields += 1;
	}
	else
	{
		return fields;
	}
}
function getInput ()
{
	document.getElementById('jsinput').innerHTML = "<form>How many participants: <br /><input type='text' name='name' placeholder='Minimum: 3' /><br />";
	document.getElementById('jsinput').innerHTML += "<a href='#' onclick='addInput(this.form)'><div class='button'>OK</div></a><br /></form>";
}