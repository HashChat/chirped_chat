<html>
  <head>
    <link rel="stylesheet" href="blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="new_homepage.css" type="text/css" >
  </head>
  <body >
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
      <div id="log_in_button">Sign Up</div>
    </div>

    <div class='container' style="clear:both; padding-top: 1em;">
      <div id="main">
        <div id="rooms">Chat rooms for your Twitter <span class="emph">#Topics</span></div>
        <div id="launcher">
          <div id="launcher_search">
            <span id="giant_hash">#</span>
            <form style="display:inline;">
              <input type="text" class="searchbox" size="21" style='width:80%'>
              <input type="submit" value="join" id="launcher_button" ></input>
            </form>
          </div>
        </div>
        <div id="trending">
          <div id="trending_hash_line">
            <div id="trending_hash" class="emph">#swsj</div>
            <div id="trending_next">next &gt;</div>
          </div>
          <div id="trending_view">
            <div id="trending_tweets"></div>
            <form>
              <div id="trending_chirp">
                <textarea placeholder="compose a new chirp..."
                  type='text' cols="140" rows="2" id="trending_chirp_text"></textarea>
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
  </body>
</html>
