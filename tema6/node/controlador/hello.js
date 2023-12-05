

function getHello(req,res){
res.status(200).send({
    msg:"holaaaa",
})
}



module.exports={
    getHello,
};