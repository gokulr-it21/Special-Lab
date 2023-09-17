const mysql = require('mysql')
const con = mysql.createConnection({
    host : 'localhost',
    database : 'admin',
    user:'root',
    password:''
})

con.connect(function(error)
{
    if(error)
    {
        throw error;
    }
    else{
        console.log('Connected to phpmyadmin database');
    }
});
module.exports = con;