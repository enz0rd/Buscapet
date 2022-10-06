const mysql = require('mysql2/promise')

// const connection = mysql.createConnection({
//     host: "localhost",
//     user: "devbuscapet",
//     password: "devbuscapet",
//     database: "bdbuscapet"
// });

// connection.connect(function(err) {
//     if (err) {
//         console.error('error connecting:' + err.stack);
//         return;
//     }

//     console.log('connected as id' + connection.threadId);
// });

// connection.query('SELECT * FROM produtos', function(err, result, fields) {
//     if (err) 
//         throw err;

//     result.forEach(result => {
//         console.log(result);
//     });
// })

// connection.end();

async function connect() {
    const connection = await mysql.createConnection("mysql://devbuscapet:devbuscapet@localhost:3306/bdbuscapet");
    console.log("Conectou ao banco");
    global.connection = connection;
    return connection
}

async function selectEmpresas() {
    const conn = await connect();
    const [rows] = await conn.query('SELECT * FROM empresas');
    return rows
}

module.exports = {selectEmpresas}
