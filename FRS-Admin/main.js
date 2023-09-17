const exprerss = require("express")
const mysql = require("mysql")
var fid = document.getElementById("demo").value;
const app = exprerss()
const conn = mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'sql123',
    database:'faculty_user'
}); 
conn.connect((err)=>{
    if(err)
    {
        console.log(err)
    }
    else{
        console.log("CONNECTED")
    } 
})

conn.query("select * from persons",(err , res)=>
{
    res.forEach( (row) => {
        fid.innerHTML = row.f_id;
      });
   
})
