/*
Modelo: Todo lo relacionado con la logica de negocio y acceso a datos.
    Backend: PHP,BD, y similares
Vista: Lo que el usuario ve (GUI)
    HTML, CSS
Controlador: Controlar los eventos del usuario, definir comportamientos y acciones.
    Javascript
*/

function login(){
    console.log("Usuario: " + document.getElementById('usuario').value);
    console.log("Password: " + document.getElementById('password').value);
}