const express = require("express");
const app = express();


//cargar rutas
const hello_routes = require("./routes/hello");


//rutas base
app.use("/api",hello_routes);



module.exports=app;