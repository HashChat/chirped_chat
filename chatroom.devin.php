<?php

//this fake $users array of users, holding their thumbnail url and username, is looped through and output to the page.
$users = array();
for($count = 0; $count < 30; $count++) { //30 is arbitrary, plenty to fill the "Active members" box displaying who is currently in this room
  $users[$count] = array("thumbnail" => "http://thescoutapp.com/X/DevinThumbnail.jpg", "username" => "devinrhode2");
}

?>
<style type="text/css">
  #main {
    width: 980px;
    height: auto;
    margin: auto;
  }
  #header {
	margin-left:-10px;
	margin-top:0px;
	width:100%;
	height:62px;
	background-image:url(images/header-bg.png);		
  }
</style>
<div id="header"></div>
<div id="main">

<!-- The general scheme from here on:
  left column styles, 
  left column html

  right column styles, 
  right column html
  
  js for both
 -->
  
  <style type="text/css">
    #leftColumn {
      width: 343px;
      position: absolute;
      height: 100%;
    }
    #logo {
      height: 100px;
      width: 100%;
    }

    .leftDiv {
      border-radius: 8px;
      background-color: white;
      border: solid 1px gray;
      margin: 10px;
    }
    .leftDivTitle {
      font-size: 24px;
    }

    .members { /*members of this chat room*/
      height: 300px;
    }
    #tweets {
      height: 500px;
    }
    
    .memberThumbnail {
      border-radius: 4px;
    }
    
    .tweet {
      
    }
    .tweet span {
      
    }
  </style>
  <div id="leftColumn">
    
    <div class="members leftDiv">
    
      <span class="leftDivTitle">In this chatroom <a id="inviteMore">invite more</a></span>
      <div id="memberThumbnails">
        
        <div class="row">
        
          <?php for ($c = 0; $c < 12; $c++) { ?>
            <?php if ($c == 6) {echo '</div><div class="row">';} ?>
            <span class="memberThumbnailSpan">
              <img class="memberThumbnail" src="http://thescoutapp.com/X/DevinThumbnail.jpg" />
            </span>
          <?php } ?>
        </div>
        
        
      </div>
      
    </div>
    
    <div id="tweets" class="leftDiv">
       <span class="leftDivTitle">Tweets with #<span id="topic"></span></span>
    </div>
  </div> 
  
  
  <style type="text/css">
    #rightChat {
      width: 637px; /*65% of 980px*/
      right: 0px;
      position: relative;
      float: right;
    }
    #go {
      width: 100px;
      height: 100px;
      background: rgb(60, 166, 248);
      color: white;
      display: block;
      font-size: 74px;
      cursor: pointer;
      float: right;
    }
    #go > span {
      position: relative;
      left: 9px;
      bottom: 3px;
    }
    #titleInput {
      font-size: 74px;
      width: 530px;
      height: 100px;
    }
  </style>
  <div id="rightChat">
    <div id="title">
      <input type="text" id="titleInput" name="titleInput" value="#">
      <span id="go">
        <span>go</span>
      </span>
    </div>
    
  </div><!-- End #rightChat -->

</div>
</body>
</html>