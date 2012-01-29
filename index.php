<?php
//FROM DEVIN
/* I will make an ajax GET to this file, passing a topic GET parameter, from the client. 
 * 
 */

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

?>