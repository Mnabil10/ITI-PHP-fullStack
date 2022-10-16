const http = require('http');
const fs = require('fs');
const url = require('url');
function requestHandler (req, res) {
    let urlDetails = url.parse(req.url,true);
    if(urlDetails.pathname == "/"){
        res.writeHead(200, {'Content-Type': 'text/html'});
        fs.readFile("home.html",function(error,data){
            console.log(error);
            res.end(data);
        })
       
    }else if(urlDetails.pathname == "/add" && req.method=="POST"){
        req.on('data',(data)=>{
            let emp = url.parse("/?"+data.toString(),true).query;
            console.log(emp.Password);
            if(emp.Password.length>=8){
                res.end("Registration success");
            }else{
                res.end('Error password is less than 8 characters')
            }
        })
    }
}
    
   

http.createServer(requestHandler).listen(8080)