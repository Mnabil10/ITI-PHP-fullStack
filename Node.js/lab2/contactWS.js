const express = require("express");
const bodyParser = require("body-parser");
const fs = require("fs");
const app = express();
const jsonParser = bodyParser.json();


let contacts = [];
let contactIndex=0;
loadContactsFromFile();
function loadContactsFromFile(){
    fs.readFile("db.txt",function(err,data){
        contacts = JSON.parse(data);
        let maxId = 0;
        for(let contact of contacts){
            if(contact && contact.id>maxId) maxId = contact.id;
        }
        maxId++;
        contactIndex=maxId;
    })

}

function saveContactsToFile(){
    fs.writeFile("db.txt",JSON.stringify(contacts),function(){});
}



app.get("/contacts.html",function(req,res){
    res.sendFile(__dirname+"/contact.html");
})


app.post("/addcontact",jsonParser,function(req,res){
    req.body.id=contactIndex++;
    contacts.push(req.body);
    saveContactsToFile();
    console.log(contacts);
    res.send({msg:"Contact added"});
})


app.get("/contacts",function(req,res){
    if(req.query.name==undefined) req.query.name="";
    
    let filteredContacts = contacts.filter(contact=>contact && contact.name.toLowerCase().indexOf(req.query.name.toLowerCase())>-1)

    res.send(filteredContacts);
});


app.delete("/deletecontact",function(req,res){
    console.log(req.query,contacts);
    let contactIndex = contacts.findIndex(contact=>contact && contact.id==req.query.id);
    delete contacts[contactIndex];
    saveContactsToFile();
    res.send({msg:"Contact deleted"});

})

app.put("/editcontact",jsonParser,function(req,res){
    let contact = contacts.find(contact=> contact && contact.id==req.body.id);
    contact.name = req.body.name;
    contact.phone = req.body.phone;
    saveContactsToFile();
    res.send({msg:"Contact saved"});

})


app.get("/getcontact",function(req,res){
    let contact = contacts.find(contact=> contact && contact.id==req.query.id);
    res.send(contact);
})
app.listen(8080);