var express = require('express')
 , fs      = require('fs')
 , http    = require('http')
 , path    = require('path');

var app = express();
app.set('port', process.env.PORT || 8080);
app.use(express.static(path.join(__dirname, '/Public')));

app.get('/', function(request, response) {
var text = fs.readFileSync("index.php","utf-8")
 response.send(text);
});

http.createServer(app).listen(app.get('port'),function(){
  console.log("Listening on " + app.get('port'));
});

