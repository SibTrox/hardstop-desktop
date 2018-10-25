/*"use strict";
(function() {
var respuesta = []; 
var usuarioEncontrado = [];
    window.onload = function(){
        var confirm = JSON.parse(window.localStorage.getItem("user"));
        var confirm2 = JSON.parse(window.sessionStorage.getItem("user"));
        var formulario = document.getElementById("formulario");
        var bienvenido = document.getElementById("bienvenido");
        var imagen = document.getElementById("usuario");
        var loggeado = document.getElementById("logged");
        if(confirm || confirm2){
            imagen.className = imagen.className.replace(/\bimg4\b/g, "ocultar");
            loggeado.className = loggeado.className.replace(/\bocultar\b/g, "img4");
            formulario.className += " ocultar";
            bienvenido.className = bienvenido.className.replace(/\bocultar\b/g, "bienvenido");            
        }else{
            var $boton = document.getElementById("iniciarsesion");
            $boton.onclick = function(event){
                event.preventDefault();
                buscarUsuario(recordarme);
                var confirm = JSON.parse(window.localStorage.getItem("user"));
                var confirm2 = JSON.parse(window.sessionStorage.getItem("user"));
                if(confirm || confirm2){
                    imagen.className = imagen.className.replace(/\bimg4\b/g, "ocultar");
                    loggeado.className = loggeado.className.replace(/\bocultar\b/g, "img4");
                    formulario.className += " ocultar";
                    bienvenido.className = bienvenido.className.replace(/\bocultar\b/g, "bienvenido");
                }else{
                    window.location="index.php";
                    alert("Usuario y/o contraseña incorrectos");
                }
            }
        }   
    traerUsuarios();
    }
function traerUsuarios(){
    let request = new XMLHttpRequest();
    let url = "http://hardstop.000webhostapp.com/api/usuarios.php";
    request.open('GET', url, true);
    //request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    request.onreadystatechange = function(){
    if(request.status==200 && request.readyState==4){
        respuesta = JSON.parse(request.responseText);
    }
    };
    request.send();
}

function buscarUsuario(callback){
   	/*respuesta.forEach(function(elemento, indice){
       	if (elemento.mail==paramId && elemento.password==paramPass) {
       		if(typeof callback==="function"){
       			usuarioEncontrado = respuesta;
       			return callback(usuarioEncontrado);
       		}else{
       	    	return elemento;
       	}
       	}
   	});
   	var mail = document.getElementById("user").value;
    var pass = document.getElementById("pw").value;
   	var correo = "enzo@gmail.com";
    var contrasenia ="12345678";
    var nombre = "Enzo";
   	if(mail == correo && pass == contrasenia){
   	    usuarioEncontrado = mail;
       	return callback(mail, nombre);
   	}
}

function recordarme(paramDatos, paramDatos2){
    var $recordarme = document.getElementById("toggler-1");
    if($recordarme.value=="1"){
        window.localStorage.setItem("user", JSON.stringify(paramDatos, paramDatos2));
        }else{
        sessionStorage.setItem("user", JSON.stringify(paramDatos, paramDatos2));
        }
}
})();*/
