
</head>
<body>
<style type="text/css">
  /*reset css from yui*/
  body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
  form,fieldset,input,textarea,p,blockquote,th,td{ 
  	margin:0;
  	padding:0;
  }
  table {
  	border-collapse:collapse;
  	border-spacing:0;
  }
  fieldset,img { 
  	border:0;
  }
  address,caption,cite,code,dfn,em,strong,th,var {
  	font-style:normal;
  	font-weight:normal;
  }
  ol,ul {
  	list-style:none;
  }
  caption,th {
  	text-align:left;
  }
  h1,h2,h3,h4,h5,h6 {
  	font-size:100%;
  	font-weight:normal;
  }
  q:before,q:after {
  	content:'';
  }
  abbr,acronym { border:0;
  }
  
  html {
    height: 100%; /*height 100% so the gradient circle isn't weird*/
    
    -moz-font-smoothing:antialiased !important;
    -o-font-smoothing:antialiased !important;
    -webkit-font-smoothing:antialiased !important;
    -ms-font-smoothing:antialiased !important;
    font-smoothing:antialiased !important;
    font-family:"Myriad Pro", "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
  }
  h1, h2 {
    color: white;
    text-shadow: 1px 1px 1px black, 1px 1px 90px white;
  }
  h1 {
    margin-bottom: 43px;
    font-size: 59px;
  }
  h2 {
    font-size: 30px;
  }
  a {
   text-shadow: none;
  }
  body {
    text-align: center;
    height: 100%;
  }
  #liveChats {
    margin-left: auto;
    margin-right: auto;
    width: 606px;
  }
  #chatRoomList {
    width: 232px;
    border: solid 1px gray;
    position: absolute;
  }
  
  .chatRoomLi:first-child, #chatRoomList {
    border-top-left-radius: 8px;    
  }
  
  .chatRoomLi:last-child, #chatRoomList {
    border-bottom-left-radius: 8px;
  }
  
  .chatRoomLi:last-child {
    border: none;
  }
  
  #theActualChatRoom {
    width: 374px;
    position: relative;
    left: 234px;
  }
  .chatRoomLi {
    height: 28px;
    padding-top: 13px; /*target is to have padding and height at to 30, for the total height of the element*/
    background-color: white;
    width: 100%;
    border-bottom: solid 1px gray;
    -webkit-transition: background-color 0.2s;
    -moz-transition: background-color 0.2s;
    transition: background-color 0.2s;    
  }
  .chatRoomLi:hover {
    background-color: #E6E6E6;
  }
  #title {
    margin-top: 120px;
    margin-bottom:60px;
  }
  
  
  /*css for chat elements, author, profile pic thumbnail, etc. */
  .profilePicThumbnail {
    border-radius: 4px;
    width: 25px;
    height: 25px;
  }
</style>
<script type="text/javascript">
  
</script>
<h1 id="title">Welcome to Chirpd.it!</h1>
<h2>Go, GO NOW! &nbsp;Chat on: <a href="<?php curPageUrl(); ?>/#SWSJ">#SWSJ</a></h2>

<div id="liveChats">
  <ul id="chatRoomList">
    <li class="chatRoomLi">#SWSJ</li>
    <li class="chatRoomLi">#ChirpIt</li>
    <li class="chatRoomLi">#Biebs</li>
    <li class="chatRoomLi">#Startups</li>
    <li class="chatRoomLi">#JavaScript</li>
    <li class="chatRoomLi">#ShitSiliconValleySays</li>
  </ul>
  <div id="theActualChatRoom">
    <div class="chat">
      <img src="http://thescoutapp.com/X/DevinThumbnail.jpg" class="profilePicThumbnail" />
    </div>
    <div class="chat">Hey these guys, they got this chat thing DOWN!</div>
    <div class="chat">I agree Bob I agree. </div>
  </div>
</div>
</body>
</html>
