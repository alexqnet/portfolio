var word1 = 'Hi! ';
var word2 = 'This is the website of Alexander Qui\u00f1ones. It\'s under construction now. Here is some information about about your browser:';
var sentence = word1 + word2;
var el = document.getElementById('word1'); el.textContent = sentence;

var msg = '<h2>browser window</h2><p>width: ' + window.innerWidth + '</p>';
msg += '<p>height: ' + window.innerHeight + '</p>';
msg += '<h2>history</h2><p>items: ' + window.history.length + '</p>';
msg += '<h2>screen</h2><p>width: ' + window.screen.width + '</p>';
msg += '<p>height: ' + window.screen.height + '</p>';
var el = document.getElementById('info');
el.innerHTML = msg;

console.log(35+3.5);
console.log(2016-1969);

