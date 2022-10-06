const mysql = require("mysql2/promise");

async function connect() {
  const connection = await mysql.createConnection("mysql://devbuscapet:devbuscapet@127.0.0.1:3306/bdbuscapet");
  console.log("Conectou ao banco");
  global.connection = connection;
  return connection;
}

async function selectEmpresas() {
  const conn = await connect();
  const [rows] = await conn.query('SELECT * FROM empresas');
  return rows;
}

module.exports = { selectEmpresas };
