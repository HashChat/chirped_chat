<?php
//NOTE: DO NOT INCLUDE ANYTHING REGARDING A CHATROOM HERE.
/* What?
 * When you go to chirped.it/ (with or without a #topic) we send down some javascript that reads the #topic, and makes a GET for chatroom.php?topic=theTopic or homepage.php. Then I take the response and set it to the innerHTML of the <body>
 
 Thing is we can't read beyond the # in a url
 */

require('lib/header.php');
?>
<script type="text/javascript">
  window.url = window.location.href;
  window.topic = 'no-topic'; //default
  if (url.indexOf('/#') > 0) {
    topic = url.substr(url.indexOf('/#') + 2, url.length);
    console.error('fetching chatroom #' + topic);
    if (topic = 'devin') {
      GET('/chatroom.php?topic=' + topic, function(resp) {
        console.error('got response on ');
        doc.body.innerHTML = resp;
      });
    } else {
      GET('/chatroom.devin.php?topic=' + topic, function(resp) {
        console.error('got response on ');
        doc.body.innerHTML = resp;
      });
    }
  } else {
    console.error('fetching homepage!');
    GET('/homepage.php', function(resp) {
      console.error('homepage rolling in!');
      doc.body.innerHTML = resp;
    });
  }
</script>
</head>
<span></span>
<body>
  <h1 id="message" style="margin-top:60px;"></h1>
  <script type="text/javascript">
    if (topic = 'no-topic') {
      d.id('message').innerText = 'loading an awesome homepage...';
    } else {
      d.id('message').innerText = 'loading an awesome chat on #' + topic;
    }
  </script>
  <!-- body needs to be replaced with.. either the chatroom or the homepage.. -->
</body>
</html>