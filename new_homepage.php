<?php include 'auth.php'; ?>
    <link rel="stylesheet" href="blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="new_homepage.css" type="text/css" >
    <div id="header">
      <div id="header_left" ><img src="images/logo.png" /></div>
      <!--
      <div id="header_spacer" ></div>
      -->
      <div id="header_right">
        <div id="defintion_blurb">
          <div id="definition_blurb_top">chirp. chirp. chirp.</div>
          <div id="definition_blurb_bottom">
            Discuss what the world is talking about
          </div>
        </div>
      </div>
<?php if(isSignedIn()) { ?>
      <a href='/auth.php?action=signout' ><div id="log_in_button">Sign Out</div></a>
<?php } else { ?>
      <a href='<?php echo $signinurl; ?>' ><div id="log_in_button">Sign In with Twitter</div></a>
<?php } ?>
    </div>

    <div class='container' style="clear:both; padding-top: 1em;">
      <div id="main">
        <div id="rooms">Chat rooms for your Twitter <span class="emph">#Topics</span></div>
        <div id="launcher">
          <div id="launcher_search">
            <span id="giant_hash">#</span>
            <form style="display:inline;" method="POST" action="/" >
              <input type="text" class="searchbox" placeholder="Chat about..." size="21" style='width:auto' name='topic'>
              <input type="submit" value="join" id="launcher_button" ></input>
              <input type='hidden' value='<?php echo $twtusername ?>' name='twtusername' />
              <input type='hidden' value='<?php echo $twtname ?>' name='twtname' />
              <input type='hidden' value='<?php echo $twtprofilepic ?>' name='twtprofilepic' />
            </form>
          </div>
        </div>
        <div id="trending">
          <div id="trending_hash_line">
            <a href="http://chat.chirped.it/#IMissTheDaysWhen" style="text-decoration: none;" target="_blank"><div id="trending_hash" class="emph">#IMissTheDaysWhen</div></a>
            <div id="trending_next">next &gt;</div>
          </div>
          <div id="trending_view">
            <div id="trending_tweets" style="height:270px;">
            <iframe src="http://chat.chirped.it/tweet2.php" scrolling="no"></iframe>
            
            </div>
            <form style="display:inline;" method="POST" action="/">
              <div id="trending_chirp">
                <textarea placeholder="compose a new chirp..."
                  type='text' cols="140" rows="2" id="trending_chirp_text"></textarea>
                  	  <input type='hidden' value="IMissTheDaysWhen" name='topic' />
                      <input type='hidden' value='<?php echo $twtusername ?>' name='twtusername' />
                      <input type='hidden' value='<?php echo $twtname ?>' name='twtname' />
                      <input type='hidden' value='<?php echo $twtprofilepic ?>' name='twtprofilepic' />

              </div>
              <div>
                <div id="trending_chirp_stats">
                  <span id="trending_chirp_letters_left">140</span>
                  <div id="trending_chirp_button">
                    <input type='submit' value='chirp' ></input>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
<script>
//window.alert("BLA");
GET("chat.chirped.it/chatroom.php?logout=true",null);
</script>