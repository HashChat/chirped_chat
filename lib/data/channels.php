<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

$con = mysql_connect('thefacephone.ce6ojopwii3x.us-east-1.rds.amazonaws.com','chirped','Chirped123!');
mysql_select_db('chirped',$con);
$sql = 'select channelname from channels';
	$res = mysql_query($sql);
	if ( !$res )
		return false;
		

$channels = array();

while ($row = mysql_fetch_array($res)) {
    //printf("ID: %s  Name: %s", $row[0], $row[1]);  
	$channels[]=$row[0] ;
}		
		
//$channels= mysql_fetch_array($res);
mysql_close($con);

//var_dump($channels[2]);

//$myFile = "testFile.txt";
//$fh = fopen($myFile, 'a') or die("can't open file");
//fwrite($fh, $channels[0]);
//fclose($fh);

	


// List containing the custom channels:
/*$channels = array();

// Sample channel list:
$channels[0] = 'Public';
$channels[1] = 'Private';
$channels[2] = 'foobar';
$channels[3] = 'facebook';
$channels[4] = '10basicfactsaboutme';
$channels[4] = 'unfollow';
$channels[4] = 'wealldothat';
*/
?>
