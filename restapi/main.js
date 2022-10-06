import express from 'express';
import bodyParser from 'body-parser';

import empresasRoutes from './routes/empresas.js'

const app = express()
const PORT = 5000

app.use(bodyParser.json())

app.use('/empresas', empresasRoutes)

app.get('/', (req, res) => res.send('hello from lp'))

app.listen(PORT, () => {
    console.log(`Server Running on port: http://localhost:${PORT}`)
})