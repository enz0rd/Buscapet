import { v4 as uuidv4} from 'uuid'
import { SelEmpres } from "../db.js"

let empresas = [];

// export const EmpresasList = (req, res) => {
//     res.send(empresas)
// }

///CONEXÃO COM O BANCO

export const EmpresasList = async (req, res) => {
    const empresas = await SelEmpres
    res.send(empresas)
}

///API CONFORME SERVIDOR

export const novaEmpresa = (req, res) => {
    const empresa = req.body
    
    empresas.push({ ... empresa, id: uuidv4()})

    res.send(`Empresa com o nome ${empresa.name} adicionada!`)
}

export const listarEmpresa = (req, res) => {
    const { id } = req.params

    const resultemp = empresas.find((empresa) => empresa.id === id)
    
    res.send(resultemp)
}

export const deletarEmpresa = (req, res) => {
    const { id } = req.params

    empresas = empresas.filter((empresa) => empresa.id !== id)

    res.send(`Empresa com o id: ${id} foi deletado!`)
}

export const atualizaEmpresa = (req, res) => {
    const { id } = req.params

    const { name, categoria, desc } = req.body

    const empresa = empresas.find((empresa) => empresa.id === id)

    if(name) empresa.name = name
    if(categoria) empresa.categoria = name
    if(desc) empresa.desc = name

    res.send(`Empresa com o id: ${id} foi atualizada!`)
}