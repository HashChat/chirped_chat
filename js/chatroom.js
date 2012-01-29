d.id('inviteMore').onclick = function(e) {
  //javascript etc. dadada (emailed out task)
};
window.url = window.location.href;
window.topic = 'devin-default';
function insertTweets(tweetObjects) {
  var tweet = document.createElement('div');
  tweet.innerHTML = '';
  tweet.class = 'tweet';
  d.id('tweets').appendChild(tweet);
}

if (url.indexOf('chirped.it/#') > 0) {
  window.topic = url.substr(url.indexOf('chirped.it/#') + 12, url.length);
  getTweets(topic, insertTweets);
} else {
  trueUrl && alert('expecting the url format chirped.it/#foo -devin');
}
d.id('topic').innerText = topic;
var titleInput = d.id('titleInput');
titleInput.setAttribute('value', '#'+topic);
d.id('go').onclick = function(e) {
  var titleInputText = titleInput.getAttribute('value');
  window.location.href = 'http://chirped.it/#' + titleInputText.substr(1,titleInputText.length);
}