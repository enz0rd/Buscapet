const mysql = require('mysql2')
const express = require('express')
const app = express()
const port = 3000

const con = mysql.createConnection({
    host: "localhost",
    user: "devbuscapet",
    password: "devbuscapet",
    database: "bdbuscapet"
})

app.use(express.json())

con.connect(function(err) {
    if(err) throw err;
    console.log("connected!")
})

selectEmpresas = () => con.query('SELECT * FROM empresas', (err, rows, fields) => {
    if (err) throw err
})


app.listen(port, () => {
    console.log(`App running on port ${port}`)
})

app.get('/', (req, res) => {
    res.send('hello world')
})

app.get('/empresas', (req, res) => {
    res.send()
})