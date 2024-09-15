function start(){
    hora();
    giroDeSlides();
}

function hora(){
    let datahoje = new Date();
    let dia = datahoje.getDate();
    let mes = datahoje.getMonth();
    let ano = datahoje.getFullYear();
    let hora1 = document.getElementById("hora1");
    let nomeMes = new Array ("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro");
    hora1.innerText = dia + " de " + nomeMes[mes] + " de " + ano ;
}

function verificar(id){
    if (confirm("Tem certeza que deseja excluir? Id = " + id))
        window.location="excluir.php?varid=" + id;
}

function validar() {
    let nome1 = document.forms["form1"]["nome"].value;
    let email1 = document.forms["form1"]["email"].value;
    let validarEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let validarNome = /^[a-zA-Z]+ [a-zA-Z]+$/;
    let mens1 = document.getElementById("mens1");
    let mens2 = document.getElementById("mens2");
    let mensErr = document.getElementById("msgErr");
    let cont = 0;
    document.forms["form1"]["nome"].style.backgroundColor = "white";
    document.forms["form1"]["email"].style.backgroundColor = "white";
    mens1.innerHTML = "";
    mens2.innerHTML = "";
    mensErr.innerText = "";       
    if(!validarNome.test(nome1)){
        mens1.innerText = "*Insira um nome válido!";
        document.forms["form1"]["nome"].style.backgroundColor = "red";
        cont++
    }
    if(!email1.match(validarEmail)){
        mens2.innerText = "*Insira um email válido!"
        document.forms["form1"]["email"].style.backgroundColor = "red";
        cont++;
    }
    if(cont > 0){
        mensErr.innerText = "Preencha corretamente os campos obrigatórios!";
        return false;
    }
}

let index = 0;

function giroDeSlides(){
    let i;
    let x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    index++;
    if (index > x.length) {
        index = 1
    }    
    x[index-1].style.display = "block";  
    setTimeout(giroDeSlides, 300);
}