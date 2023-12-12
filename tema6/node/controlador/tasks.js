const task = require("../modelo/tasks");

//function para insertar una nueva tarea
async function createTask(req,res){
    const task= new task();

    task.title=params.title;
    task.description=params.description;

    try {
        const taskStore= await task.save();
        if(!taskStore){
            res.status(400).send({msg:"error en mongo"})
        }else{
            res.status(200).send({task:taskStore})
        }
    } catch (error) {
        res.status(500).send(error)
    }


    }
    
    
    
    module.exports={
        createTask,
    };