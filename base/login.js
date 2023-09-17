const mysql = require('mysql');
const express  =  require('express');
const app = express();
const bodyparser = require("body-parser");

// ---------------------------ADMIN DATABASE CONNECTION ---------------------------------//
const _dbconn1 = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'admin'
});
_dbconn1.connect(function(error)
{
    if(error)
    {
        throw error;
    }
    else{
        console.log("Connected to ADMIN database");
    }
})
//-------------------------------------FACULTY DATABASE CONNECTION-----------------------//
const _dbconn2 =  mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'faculty'
});
_dbconn2.connect(function(error)
{
    if(error) throw error;
    else console.log("Connected to FACULTY database");
})
app.get("/" , function(req , res){
    res.sendFile(__dirname + "/index_main.html");
})
app.post("/" , function(req , res){
    _dbconn1.query("select * from admin_mem where EMAIL = ? and PASSWORD = ? " , function(error  , results , fields)
    {
        if(results.length >0)
        {
            res.redirect("/admin.html")
        }
        else{
res.redirect("/");
        }
        res.end();
    })
})
app.get("/admin" , function(req , res)
{
    res.sendFile(__dirname + "/admin.html")
})
//-------APP PORT 8000-------//
app.listen(8000);
