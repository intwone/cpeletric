const express = require("express");
const app = express();

// database connection
const mysql = require('mysql');

const dbConnect = mysql.createConnection({
    host: "cpeletric",
    user: "root",
    password: "root",
    database: "system_management"
});

dbConnect.connect(function(error) {
    if (error) {
        console.error('Error connecting: ' + error.stack);
        return;
    }

    console.log('connect as id ' + dbConnect.threadId);
});