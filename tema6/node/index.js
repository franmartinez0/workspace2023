const app= require("./app");
const port = 3000
const mongoose= require("mongoose");


const urlMongo="mongodb://localhost:27018/apitareas"

mongoose.connect(urlMongo);
app.listen(port, () => {
  console.log(`App funcionando y escuchando por el puerto ${port}`)
})




