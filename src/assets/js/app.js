const express = require("express");
const app = express();

// Database connection
const mysql = require('mysql');
const dbConnection = mysql.createConnection({
    host: 'cpeletric',
    user: 'root',
    password: 'root',
    database: 'system_management'
});

dbConnection.connect(function(err) {
    if (err) {
        console.log("ERROR");
        return;
    }

    console.log('connected as id ' + connection.threadId);
});