<?php
<<<<<<< HEAD
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license GNU Affero General Public License
 * @link https://blueimp.net/ajax/
 */

date_default_timezone_set('America/Los_Angeles');

// Show all errors:
error_reporting(E_ALL);

// Path to the chat directory:
define('AJAX_CHAT_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');
=======
//Do any auth, mysql, whatever stuff you need for BOTH the homepage and chatroom here. 
>>>>>>> homepage redirection, and other stuff


<<<<<<< HEAD
// Include Class libraries:
require(AJAX_CHAT_PATH.'lib/classes.php');

// Initialize the chat:
$ajaxChat = new CustomAJAXChat();
?>
=======
require('lib/header.php');
?>
<script type="text/javascript">
  window.url = window.location.href;
  window.topic = 'no-topic'; //default
/*
  if (url.indexOf('/#') > 0) {
    topic = url.substr(url.indexOf('/#') + 2, url.length);
    GET('/chatroom.php?topic=' + topic, function(resp) {
      doc.body.innerHTML = resp;
    });
  } else {
    GET('/homepage.php' + topic, function(resp) {
      doc.body.innerHTML = resp;
    });
  }
*/
</script>
</head>
<body>
  <h1 style="margin-top:60px;">Loading some awesomeness…</h1>
  <!-- body needs to be replaced with.. either the chatroom or the homepage.. -->
</body>
</html>
>>>>>>> homepage redirection, and other stuff
