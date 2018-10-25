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
