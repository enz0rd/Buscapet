import express from 'express';
import { novaEmpresa, listarEmpresa, deletarEmpresa, atualizaEmpresa, EmpresasList } from '../controllers/empresas.js';


const router = express.Router();

router.get('/', EmpresasList);

router.post('/', novaEmpresa);

router.get('/:id', listarEmpresa);

router.delete('/:id', deletarEmpresa);

router.patch('/:id', atualizaEmpresa);


export default router;