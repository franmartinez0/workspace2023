const express = require("express");
const app = express();



//configurar req
app.use(express.json());
app.use()

//cargar rutas

const task_routes = require("./routes/tasks");




//rutas base

app.use("/api",task_routes);


module.exports=app;