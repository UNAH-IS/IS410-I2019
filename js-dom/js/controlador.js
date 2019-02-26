/*
Modelo: Todo lo relacionado con la logica de negocio y acceso a datos.
    Backend: PHP,BD, y similares
Vista: Lo que el usuario ve (GUI)
    HTML, CSS
Controlador: Controlar los eventos del usuario, definir comportamientos y acciones.
    Javascript
*/

function login(){
    if (document.getElementById('usuario').value == ''){
        document.getElementById('error-usuario').style.display = 'block';
        document.getElementById('usuario').classList.add('input-error');
    }

    if (document.getElementById('password').value == ''){
        document.getElementById('error-password').style.display = 'block';
        document.getElementById('password').classList.add('input-error');
    }


}