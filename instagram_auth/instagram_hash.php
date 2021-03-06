<?php

/*************************************/
/* Instructions to get the client ID */
/*
1 - Register an app at http://instagram.com/developer/
2 - You will find the client ID in http://instagram.com/developer/clients/manage/
*/

$client_ID = '7cf5236bbc5b44c5b737c5203636aaef';

/***************************************/

/***************************************/

error_reporting(E_ALL ^ E_NOTICE);

if(empty($_GET['tag'])) 
	die('The hashtag is required');

//Include Configuration

$tag = str_replace('#', '', $_GET['tag']);
$count = $_GET['count'];

if($count == "" || $count <= 0) 
	$count = 20;

require_once 'instagram.class.php';

// Initialize class with client_id
// Register at http://instagram.com/developer/ and replace client_id with your own
$instagram = new Instagram($client_ID);

// Get latest photos according to #hashtag keyword
$media = $instagram->getTagMedia($tag, $count);

$count = 0;
$json_format = '{"responseData": {"feed":{"feedUrl": "http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].'","title":"Instagram / '.$tag.'","link":"http://instagram.com/tags/'.$username.'","author":"","description":"Instagram updates from '.$tag.' / '.$username.'.","type":"rss20","entries":[';
if(is_array($media->data)) {
foreach($media->data as $row)
{

	if($count > 0) {
		$json_format .= ',';	
	}
	$attached = "";
	$attached .= ' <img alt="" src="'.$row->images->standard_resolution->url.'" /> ';

	$json_format .= '{"title":' . json_encode($row->caption->text) . ',"link":"'.$row->link.'","author":"'.$row->user->username.'","publishedDate":"' . date("D, d M Y H:i:s O", $row->created_time) . '","contentSnippet":' . json_encode($row->caption->text.$attached) . ',"content":' . json_encode($row->caption->text.$attached) . ',"categories":[]}';
	$count++;
}
}
$json_format .= ']}}, "responseDetails": null, "responseStatus": 200}';

header("Content-Type: application/json; charset=UTF-8");
echo $json_format;
?>