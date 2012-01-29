jQuery.fn.reverse=Array.prototype.reverse;
String.prototype.links=function() {
    return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/g,
    function(a) {
        return '<a href="' + a + '" target="_new">' + a + '</a>';
    });
};
String.prototype.user=function() {
    return this.replace(/[@]+[A-Za-z0-9-_]+/g,
    function(b) {
        var username = b.replace("@","")
        return '<a class="twitter-anywhere-user" href="http://twitter.com/' + username + '" target="_new">' + b + '</a>';
    });
};
String.prototype.hashtags=function() {
    return this.replace(/[#]+[A-Za-z0-9-_]+/g,
    function(c) {
        var hashtag=c.replace("#",'');
		
		//var xxxx='<a href="javascript:parent.window.open(\'http:\/\/chat.chirped.it\/#'+hashtag+'\');"></a>';

		//var hashtag=c.replace("#",xxxx);
		
		//c.target="_blank";
        //return
		 //return c.link("http://www.chirped.it/#"+hashtag);
		 c='<a href="javascript:parent.window.open(\'http:\/\/chat.chirped.it\/#'+hashtag+'\');">#'+hashtag+'</a>';
        return c;//("http://www.chirped.it/#"+hashtag);
		
    });
};




String.prototype.RTs=function() {
    if (this.search(/^RT @/i) != -1) {
    	return (true);
    }
};

last_id = 0;
timeoutSpeed=5000;

function get_format (xx)
{
		
		var tweet='<p id="'+xx.id_str+'" class="'+xx.from_user.toLowerCase()+'"> ';
		
		tweet=tweet+'<a href="http://twitter.com/'+xx.from_user+'" target="_new"><img width="48" height="48" border="0" alt="" align="left" src="'+xx.profile_image_url+'" class="profilePic" ></img></a> ';
		
		tweet=tweet+ ' <span class="smallTxt right" style="visibility:hidden;text-align:right;"> ';
		
		   tweet=tweet+'<a href="http://threadir.com/start?replyTweet='+xx.id_str+'" target="_new"> <img src="http://cdn.threadir.com/img/write.png?48201" title="Start Thread at threadir.com" border="0" style="opacity:0.3;filter:alpha(opacity=30);" > </img> </a>  ' ;
		
		
		 tweet=tweet+'<span id="user'+xx.id_str+'"> <a href="#" onClick="user(\''+xx.id_str+'\'); return false;"> <img src="../images/user.gif" title="User Control" border="0" style="float: right;" /></a> </span> <br/>   ';
		 
		 
		tweet=tweet+'<span id="userControl'+xx.id_str+'" style="display:none;text-align:center;" class="small button white"> <a href="#" onClick="quickFeature(\''+xx.from_user+'\',\''+xx.id_str+'\'); return false;">Feature </a> | <a href="#" onClick="quickBlock(\''+xx.from_user+'\',\''+xx.id_str+'\'); return false;">Block </a> </span> </span>  '; 
		
			tweet=tweet+'<a class="twitter-anywhere-user" href="http://twitter.com/'+xx.from_user+'" target="_new">'+xx.from_user+ '</a>' ;
			
			
			strVal = xx.text.links().user().hashtags();
			//strVal = strVal.newlink();
			strVal = strVal.replace(/[&]+/g,'');
			
			tweet=tweet+strVal;
			
			tweet=tweet+'<span class="smallTxt"> -'+dateFormat(xx.posted, "h:MM TT mmm dS, yyyy")+'</span> <br style="clear:both;" /> </p>';
			
			   
			return tweet;
}

function getTweets(hashtag,cb)
{
	//alert(hashtag);
	 if (hashtag.length <= 16){
		var url="http://search.twitter.com/search.json?q=%23"+hashtag+"&rpp=4&since_id="+last_id+"&callback=?";
	} else {
		var url="http://search.twitter.com/search.json?q="+hashtag+"&rpp=25&since_id="+last_id+"&callback=?";	
	}
	jQuery.ajax({
		url: url,
		type: 'GET',
		dataType: 'jsonp',
		timeout: 10000,
		dataFilter: function(data) {
			if (typeof (JSON) !== 'undefined' && typeof (JSON.parse) === 'function') {
				return JSON.parse(data);
			} else {
				return eval('(' + data + ')');
			}
		},
		success: function(data){
			console.error(data);
			cb(data);
			return;
    	
		}
	});
	timeout = setTimeout(function(){getTweets(hashtag,cb)},timeoutSpeed);
	return(false);
	
}

