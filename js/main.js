    function usuarioLoggeado () {
        let boton = document.getElementById('usuario')
        document.getElementById('usuario-oculto').id = 'usuario'
        boton.id = 'usuario-oculto'
        document.getElementById('opciones').classList.add('ocultar')
        document.getElementById('formulario-inicio').classList.add('ocultar')
    }

    function usuarioErroneo () {
        swal ( "Oops" ,  "Tu usuario y/o contraseña no es correcta!" ,  "error" )
    }

    function ocultarCajaCompra () {
        //document.getElementById('cajatodo').classList.add('ocultar')
        document.getElementById('creditcard').classList.remove('ocultar')
    }

    function ocultarCajaTarjeta () {
        document.getElementById('creditcard').classList.add('ocultar')
        document.getElementById('terminacompra').classList.remove('ocultar')
    }

    function preguntarPorUsuarioLoggeado () {
        let user = window.sessionStorage.getItem("user")
        if (user == null){

        }else{
            if(user == 'logged'){
                window.onload = function (event) {
                    document.getElementById('opciones').classList.add('ocultar')
                    document.getElementById('formulario-inicio').classList.add('ocultar')
                }
            }
        }
    }

    function cerrarSesion () {
        window.sessionStorage.clear();
    }