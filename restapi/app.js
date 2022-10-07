const mysql = require('mysql2')
const express = require('express')
const app = express()

const con = mysql.createConnection({
    host: "localhost",
    user: "devbuscapet",
    password: "devbuscapet",
    database: "bdbuscapet"
})

con.connect(function(err) {
    if(err) throw err;
    console.log("connected!")
})

const selectEmpresas = con.query('SELECT * FROM empresas', (err, rows) => {
    if (err) throw err

    console.log('Empresas:', rows, '\n\n')
})

// con.end((err) => {
//     if(err) {
//         console.log('error to finish connection', err)
//         return
//     }
//     console.log('the connection was finished')
// })