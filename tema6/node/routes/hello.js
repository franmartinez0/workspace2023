const express = require("express");
const HelloController = require("../controlador/hello");
const api = express.Router();





api.get("/hello",HelloController.getHello);

module.exports= api;