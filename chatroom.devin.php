<style type="text/css">
  #main {
    width: 980px;
    height: auto;
    margin: auto;
  }
</style>
<div id="main">

<!-- The general scheme from here on:
  left column styles, 
  left column html
  left column js

  right column styles, 
  right column html
  right column js
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
    .tweets {
      height: 500px;
    }
    
    .memberThumbnail {
      border-radius: 4px;
    }
  </style>
  <div id="leftColumn">
    
    <img id="logo" src="http://foo.jpg.to/" />
    
    <div class="members leftDiv">
    
      <span class="leftDivTitle">In this chatroom <a id="inviteMore">invite more</a></span>
      <div id="memberThumbnails">
        <span class="memberThumbnailSpan">
          <img class="memberThumbnail" src="http://thescoutapp.com/X/DevinThumbnail.png" />
        </span>
      </div>
      
    </div>
    
    <div class="tweets leftDiv">
       <span class="leftDivTitle">Tweets with #<span id="topic"></span></span>
    </div>
    <script type="text/javascript">
      d.id('inviteMore').onclick = function(e) {
        //javascript etc. dadada (emailed out task)
      };
      window.url = window.location.href;
      window.topic = 'devin-default';
      function insertTweets() {
        
      }
      
      if (url.indexOf('chirped.it/#') > 0) {
        window.topic = url.substr(url.indexOf('chirped.it/#') + 12, url.length);
        getTweets(topic, insertTweets);
      } else {
        trueUrl && alert('expecting the url format chirped.it/#foo -devin');
      }
      d.id('topic').innerText = topic;
    </script>
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
      width: 534px;
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
    
    <script type="text/javascript">
      var titleInput = d.id('titleInput');
      titleInput.setAttribute('value', '#'+topic);
      d.id('go').onclick = function(e) {
        var titleInputText = titleInput.getAttribute('value');
        window.location.href = 'http://chirped.it/#' + titleInputText.substr(1,titleInputText.length);
      }
    </script>
  </div><!-- End #rightChat -->

</div>
</body>
</html>