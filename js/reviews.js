function getReview(target, lastNum)
{
	xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() 
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
			document.getElementById(target).innerHTML=xmlhttp.responseText;
		}
	}
  xmlhttp.open("GET","randomize.php?lastNum="+lastNum,true);
  xmlhttp.send();
}