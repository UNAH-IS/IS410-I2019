//Declaracion de variables
/*var a=0;
var b=1.5;
var c=true;
var d=[1,2,3]; //Arreglo
var e="Hola";
var f='Juan';

a=5;
a="Pollo";
a=[3,565,6];*/

var nombre='Juan';
var apellido='Perez';

//JSON
var persona={
    nombre:'Juan',
    apellido:'Perez',
    edad:35,
    genero:'Masculino',
    fechaNacimiento:{
        dia:12,
        mes:12,
        anio:2012
    }
}

persona.nombre = 'Pedro';
persona.pais = 'Honduras';

//document.write('Hola ' + persona.nombre + ' ' + persona.apellido);
document.write(`Hola ${persona.nombre} ${persona.apellido} (${persona.pais})`);
document.write(JSON.stringify(persona)); //Convierte un JSON a cadena
console.log(persona);

function sumar(a,b){
    return a+b;
}

console.log("Resultado: " + sumar(6,7));


var restar = function(a,b){
    return a-b;
}

console.log("Resultado resta: " + restar(7,6));

var mostrarMensaje = function(m){
    alert(m);
}

var jsonX = {
    a:1,
    b:2,
    f:mostrarMensaje
};

jsonX.f("Hola, que loco esto");

var jsonY = {
    a:1,
    b:2,
    f:function(m){
        alert(m);
    }
};

jsonY.f("'Mensaje desde jsonY'");

document.write('<h1 id="ccc" class="">Hola</h1>');

function ejecutarFuncion(f, ejecutar){
    if (ejecutar)
        f();
    else
        console.log("No se ejecutara la funcion");
}

function mostrarHolaMundo(){
    console.log("Hola mundo");
}

ejecutarFuncion(mostrarHolaMundo,true);
ejecutarFuncion(function(){ console.log("Que loco esto"); }, true);


//Autoejecución de funcion anonima.
(function(){
    console.log("Se esta ejecutando esto? 0_0");
})();