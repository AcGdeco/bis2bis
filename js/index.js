function alternarAcessarConta(){
    if(document.getElementById("acessarConta").style.display == "block"){
        document.getElementById("acessarConta").style.display = "none";
    }else{
        document.getElementById("acessarConta").style.display = "block";
    }
}
function alternarPerfumes(){
    if(document.getElementById("perfumes").style.display == "block"){
        document.getElementById("perfumes").style.display = "none";
    }else{
        document.getElementById("perfumes").style.display = "block";
    }
}
function alternarAjuda(){
    if(document.getElementById("ajuda").style.display == "block"){
        document.getElementById("ajuda").style.display = "none";
    }else{
        document.getElementById("ajuda").style.display = "block";
    }
}
function alternarProduto(){
    if(document.getElementById("btnComprar").style.display == "block"){
        document.getElementById("btnComprar").style.display = "none";
        document.getElementById("nbsp").style.display = "block";
        document.getElementById("tdpadding").style.padding = "20px";
        document.getElementById("debora").style.border = "none";
    }else{
        document.getElementById("btnComprar").style.display = "block";
        document.getElementById("nbsp").style.display = "none";
        document.getElementById("tdpadding").style.padding = "10px";
        document.getElementById("debora").style.border = "solid 1px gray";
        document.getElementById("debora").style.borderRadius = "5px";
    }
    console.log(document.body.scrollTop);
}
function alternarCompra(){
    if(document.getElementById("compraDiv").style.display == "block"){
        document.getElementById("compraDiv").style.display = "none";
        document.getElementById("bloquear").style.display = "none";
    }else{
        document.getElementById("compraDiv").style.display = "block";
        document.getElementById("bloquear").style.display = "block";
    }
}