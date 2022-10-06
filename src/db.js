const mysql = require("mysql2/promise");

async function connect() {
  const connection = await mysql.createConnection("mysql://devbuscapet:devbuscapet@127.0.0.1:3306/bdbuscapet");
  console.log("Conectou ao banco");
  global.connection = connection;
  return connection;
}

//SELECT FROM ALL TABLES

async function selectEmpresas() {
  const conn = await connect();
  const [rows] = await conn.query('SELECT * FROM empresas');
  return rows;
}

async function selectProdutos() {
  const conn = await connect();
  const [rows] = await conn.query('SELECT * FROM produtos');
  return rows;
}

async function selectServicos() {
  const conn = await connect();
  const [rows] = await conn.query('SELECT * FROM servicos');
  return rows;
}

//INSERT INFO INTO THE TABLES

async function insertEmpresas(empresa) {
  const conn = await connect();
  const sql = 'INSERT INTO empresas (logoempresa, ds_empresa, tipo_Empresa, desc_empresa, contato_empresa, endereco_empresa) VALUES (?,?,?,?,?,?)';
  const values = [empresa.logo, empresa.title, empresa.tipo, empresa.desc, empresa.contato, empresa.endereco];
  return await conn.query(sql, values) 
}

async function insertServicos(servico) {
  const conn = await connect();
  const sql = 'INSERT INTO servicos (img_servico, ds_servico, valor_servico, desc_servico, cat_servico, idempresa) VALUES (?,?,?,?,?,?)';
  const values = [servico.img, servico.title, servico.valor, servico.desc, servico.categoria, servico.idempresa];
  return await conn.query(sql, values) 
}

async function insertProdutos(produto) {
  const conn = await connect();
  const sql = 'INSERT INTO produto (img_produto, ds_produto, valor_produto, qtd_produto, desc_produto, cat_produto, idempresa) VALUES (?,?,?,?,?,?,?)';
  const values = [produto.img, produto.title, produto.valor, produto.qtd, produto.desc, produto.categoria, produto.idempresa];
  return await conn.query(sql, values) 
}

module.exports = { selectEmpresas, selectProdutos, selectServicos, insertEmpresas, insertServicos, insertProdutos};
