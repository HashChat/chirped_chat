d.id('inviteMore').onclick = function(e) {
  //javascript etc. dadada (emailed out task)
};
function insertTweets(tweetObjects) {
  var tweet = document.createElement('div');
  tweet.innerHTML = '';
  tweet.class = 'tweet';
  d.id('tweets').appendChild(tweet);
}
getTweets(topic, insertTweets);
d.id('topic').innerText = topic;
var titleInput = d.id('titleInput');
titleInput.setAttribute('value', '#'+topic);
d.id('go').onclick = function(e) {
  var titleInputText = titleInput.getAttribute('value');
  window.location.href = 'http://chirped.it/#' + titleInputText.substr(1,titleInputText.length);
}