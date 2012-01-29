<?php
//NOTE: DO NOT INCLUDE ANYTHING REGARDING A CHATROOM HERE.
/* What?
 * When you go to chirped.it/ (with or without a #topic) we send down some javascript that reads the #topic, and makes a GET for chatroom.php?topic=theTopic or homepage.php. Then I take the response and set it to the innerHTML of the <body>
 
 Thing is we can't read beyond the # in a url
 */

require('lib/header.php');
?>

<style>
iframe, html, body {
	height: 100%;
	width: 100%;
	
}	
html {
	
	position:fixed;
}
</style>
</head>
<span></span>
<body>
   <iframe id="theIframe"></iframe>
<!--  <h1 id="message" style="margin-top:60px;"></h1>
  <script type="text/javascript">
/*    if (topic === 'no-topic') {
      var end = 'If you\'re reading this it probably isn\'t loading. Email Devin: devinrhode2@gmail.com';
      d.id('message').innerText = 'loading an awesome homepage..' + end;
    } else {
      d.id('message').innerText = 'loading an awesome chat on #' + topic + end;
    }*/
  </script> -->
   <!-- body needs to be replaced with.. either the chatroom or the homepage.. -->
   
   <script type="text/javascript">
  window.url = window.location.href;
  window.topic = 'no-topic'; //default
  if (url.indexOf('/#') > 0) {
    topic = url.substr(url.indexOf('/#') + 2, url.length);
    console.error('fetching chatroom #' + topic);
    
    function requireJS(src) {
      var pageJS = document.createElement('script');
      pageJS.src = src;
      doc.body.appendChild(pageJS);
    }
    
    function chatroomResponse(resp) {
      console.error('got response on ' + topic);
      doc.body.innerHTML = resp;
      requireJS('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
      requireJS('/js/tweet.js');
      requireJS('/js/chatroom.js');
    }
    
    if (topic !== 'devin') {
		d.id('theIframe').setAttribute('src', 'http://chat.chirped.it/chatroom.php?topic='+topic);
	
      //GET('/chatroom.php?topic=' + topic, chatroomResponse);
    } else {
      GET('/chatroom.devin.php?topic=' + topic, chatroomResponse);
    }
  } else {
    console.error('fetching homepagea!');
	d.id('theIframe').setAttribute('src', 'http://chat.chirped.it/homepage.php');
	
    /*GET('http://chat.chirped.it/homepage.php', function(resp) {
      console.error('homepage rolling in!');
      doc.body.innerHTML = resp;
      requireJS('/js/homepage.js');
    });*/
  }
</script>
   
</body>
</html>