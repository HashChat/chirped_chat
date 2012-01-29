<?php 

session_start();

include 'lib/EpiCurl.php';
include 'lib/EpiOAuth.php';
include 'lib/EpiTwitter.php';
include 'lib/secret.php';

if( $_GET['action'] == 'signout' ){
    unset($_SESSION['ot']);
    unset($_SESSION['ots']);
    session_destroy();
	header('Location: http://chat.chirped.it/');

}


function isSignedIn()
{

	if( isset($_SESSION['ot']) && isset($_SESSION['ots']) )
		return true;

	return false;
	
}
$signinurl="";

$twitterObj = new EpiTwitter($consumer_key, $consumer_secret);
if(isset($_SESSION['ot']) && !empty($_SESSION['ot']))
$oauth_token = 'y';
else
$oauth_token = $_GET['oauth_token'];
	if($oauth_token == '')
  	  { 
	  	$url = $twitterObj->getAuthorizationUrl();
		$signinurl=$url;
		//echo "1234";
		
	    //echo $url ;
         //if( isset($_GET['room']) )
          //  include 'tweets_listing.php';
        //else
           //include 'login.php';
     } 
	elseif( !isset($_SESSION['ot']) )
	  {
		$twitterObj->setToken($_GET['oauth_token']);
		$token = $twitterObj->getAccessToken();
		$twitterObj->setToken($token->oauth_token, $token->oauth_token_secret);	  	
		$_SESSION['ot'] = $token->oauth_token;
		$_SESSION['ots'] = $token->oauth_token_secret;
		$twitterInfo= $twitterObj->get_accountVerify_credentials();
		$twitterInfo->response;
		
		$username = $twitterInfo->screen_name;
		$profilepic = $twitterInfo->profile_image_url;
        
     } 

if(isset($_POST['message']))
	  {
	  	$msg = $_POST['message'] . ' #' . $_POST['room'];
		
		$twitterObj->setToken($_POST['ot'], $_POST['ots']);
		$update_status = $twitterObj->post_statusesUpdate(array('status' => $msg,'include_entities' => 1));
		$temp = $update_status->response;
		
        exit();
	  }
      
      if( isset($_SESSION['ot']) && isset($_SESSION['ots']) )
      {
        $twitterObj->setToken($_SESSION['ot'], $_SESSION['ots']);	  	
		$_SESSION['ot'] = $_SESSION['ot'];
		$_SESSION['ots'] = $_SESSION['ots'];
		$twitterInfo= $twitterObj->get_accountVerify_credentials();
        
		$twitterInfo->response;
		
		$username = $twitterInfo->screen_name;
		$name = $twitterInfo->name;
		$profilepic = $twitterInfo->profile_image_url;
          
          //if( isset($_GET['room']) )
          //  include 'tweets_listing.php';
          //else
          //  include 'login.php';
		 //   include 
		 //echo "out";

        }
?> 