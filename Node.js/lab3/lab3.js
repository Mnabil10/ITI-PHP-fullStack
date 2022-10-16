const express = require('express');
const bodyParser = require('body-parser');
const cookieParser = require('cookie-parser');
const app = express();
const cors = require('cors');
const formParser = bodyParser.urlencoded();
const mongodb = require("mongodb");

const dbclient = new  mongodb.MongoClient("mongodb://localhost:27017");


dbclient.connect();

const db = dbclient.db("nodejslab");





app.set("view engine","ejs");
app.use(cors())
app.use(formParser);
app.use(cookieParser());



app.get("/login",function(req,res){
    res.render("login.ejs");
});

app.get("/add",function(req,res){
    res.render("add.ejs");
});

app.post("/login", async function(req,res){
   
    let user = await db.collection('users').findOne({name:(req.body.name)})
    console.log(user)
    if(user && req.body.pass == user.pass)
    {
        // user.sid= math.random
        // res.cookie('sid',user.sid)
        res.send("login success ");
    }else{
        res.send("login failed")
    }
    
});


app.post('/add',function(req,res){
    
    db.collection('users').insertOne(req.body)
    res.send('added user')

})


app.listen(8080)