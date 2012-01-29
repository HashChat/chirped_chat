<?PHP


$con = mysql_connect('thefacephone.ce6ojopwii3x.us-east-1.rds.amazonaws.com','chirped','Chirped123!');
mysql_select_db('chirped',$con);


$twitter_username='user'.rand(0,100000000).'';
 
$topic=$_GET['topic'];

$hashtag123=$topic;

$_REQUEST["userName"]=$twitter_username;
$_REQUEST["password"]="";
$_REQUEST["channelName"]=$hashtag123;
$_REQUEST["lang"]="en";
$_REQUEST["submit"]="Login";

//$sql = 'insert into channels (channelname) values ('.mysql_real_escape_string($src).')';

$sql = 'SELECT count(channelname) FROM channels WHERE channelname like "'.mysql_real_escape_string($hashtag123).'"';

//echo $sql;
	$res = mysql_query($sql);
	$arr = mysql_fetch_array($res);
	//var_dump($arr); 
	
	
	if ( $arr[0] > 0)
	{
		//echo "there can be only one";
	}
	else
		mysql_query("INSERT INTO channels (channelname)VALUES ('".mysql_real_escape_string($hashtag123)."')");

//$res = mysql_query($sql);
//if ( !$res )
//	echo $res;		

//echo $res;		

mysql_close($con);		


?>