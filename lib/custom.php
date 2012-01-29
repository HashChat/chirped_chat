<?PHP


$con = mysql_connect('thefacephone.ce6ojopwii3x.us-east-1.rds.amazonaws.com','chirped','Chirped123!');
mysql_select_db('chirped',$con);

$src="jojo3";

//$sql = 'insert into channels (channelname) values ('.mysql_real_escape_string($src).')';
		
mysql_query("INSERT INTO channels (channelname)VALUES ('".mysql_real_escape_string($src)."')");

//$res = mysql_query($sql);
//if ( !$res )
//	echo $res;		

//echo $res;		

mysql_close($con);		


?>