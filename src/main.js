let sql = require('mysql')

let con = sql.createConnection({
    host: "localhost",
    user: "devbuscapet",
    password: "devbuscapet"
})

con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!")
})

