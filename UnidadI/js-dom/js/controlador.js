/*
Modelo: Todo lo relacionado con la logica de negocio y acceso a datos.
    Backend: PHP,BD, y similares
Vista: Lo que el usuario ve (GUI)
    HTML, CSS
Controlador: Controlar los eventos del usuario, definir comportamientos y acciones.
    Javascript
*/

function login(){
    var resultado = [];
    
    resultado[0] = validarCampoVacio('nombre');
    resultado[1] = validarCampoVacio('apellido');
    resultado[2] = validarCampoVacio('email');
    resultado[3] = validarCampoVacio('usuario');
    resultado[4] = validarCampoVacio('password');

    if (
        resultado[0]&&
        resultado[1]&&
        resultado[2]&&
        resultado[3]&&
        resultado[4]
    )
        document.getElementById('div-exito').style.display = 'block';
}


function validarCampoVacio(id){
    if (document.getElementById(id).value == ''){
        document.getElementById('div-error-'+id).style.display = 'block';
        document.getElementById(id).classList.add('input-error');
        return false;
    }
    document.getElementById('div-error-'+id).style.display = 'none';
    document.getElementById(id).classList.remove('input-error');
    return true;
}