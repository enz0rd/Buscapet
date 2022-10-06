(async () =>{
    const db = require("./db.js");
    console.log("Foi!");

    console.log("SELECT * FROM empresas");
    const empresas = await db.selectEmpresas();
    console.log(empresas);
})()