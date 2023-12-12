const express = require("express");
const taskController = require("../controlador/tasks");
const api = express.Router();




//rutas
api.post("/task",taskController.createTask);



module.exports= api;