function exibir_categoria(categoria){
    //alert(categoria);

    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos)
    for (var i=0; i<elementos.length; i++){
        console.log(elementos[i].id)
        if(categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos)
    for (var i=0; i<elementos.length; i++)
        elementos[i].style = "display:inline-block";


};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 250 && imagem.height == 250) {
        imagem.width = 200;
        imagem.height = 200;
    }
    else {
        imagem.width = 250;
        imagem.height = 250;
    }

};

function destaque1(texto){
    texto.style.color = "blue";
}


function destaque2(texto){
    texto.style.color = "white";
}

