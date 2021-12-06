const http = require("http");
const fs = require("fs");
const hostName = "localhost";
const port = 3000;
//Creation of server.

const server = http.createServer(function(req,res){
//200 for connection set without any errpr.'test/html' for html input..
  res.writeHead(200,{'Content-Type': 'text/html'}) 
  fs.readFile('home.html',function(error,data){
   if (error) {
     res.writeHead(404);
    console.log("404!!Server not found");
   }
   else{
          res.write(data);
   }
   res.end();
  })

});

server.listen(port,function(error){
  if (error) {
    console.log("404!!Server not found");
  }
  else{
    console.log("http://"+hostName+":"+port);
  }
});