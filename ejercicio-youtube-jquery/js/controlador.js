$(document).ready(function(){
    //Se ejecuta cuando el DOM este cargado completamente
    generarItems();
});

var indiceSeleccionado;

var informacion = [
    {titulo:'Marcha de las antorchas',urlCaratula:'img/1.jpg',canal:'Fuera JOH',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'},
    {titulo:'Attack on Titan Capitulo 10',urlCaratula:'img/2.jpg',canal:'Anime Cool',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'},
    {titulo:'Attack on Titan Capitulo 11',urlCaratula:'img/3.jpg',canal:'Anime Cool',visualizaciones:'19k',duracion:'66:66',subido:'19 hours ago'},
    {titulo:'Dragon Ball Super',urlCaratula:'img/4.jpg',canal:'Anime Cool',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'},
    {titulo:'Epica - Universal Death',urlCaratula:'img/5.jpg',canal:'Epica',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'},
    {titulo:'Dont stop me Now',urlCaratula:'img/6.jpg',canal:'Queen',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'},
    {titulo:'UnSun - The End Of Life',urlCaratula:'img/7.jpg',canal:'UnSun',visualizaciones:'19k',duracion:'35:25',subido:'19 hours ago'}
];

//console.log(informacion);

function generarItems(){
    console.log('GENERAR ITEMS');
    $('#registros').empty();
    //$('#registros').html('');
    for(var i=0; i<informacion.length;i++){
        console.log(informacion[i]);
        $('#registros').append(`<div class="col-xl-2 col-sm-12 col-xs-12">
                <div>
                <div class="encabezado" style="background-image: url(${informacion[i].urlCaratula});"><span>${informacion[i].titulo}<br></span><span class="duracion">${informacion[i].duracion}</span></div>
                    <div class="descripcion">
                        <div class="titulo-descripcion">${informacion[i].titulo}</div>
                        <div class="canal">${informacion[i].canal}</div>
                        <div class="visualizaciones">${informacion[i].visualizaciones} | ${informacion[i].subido}</div>
                        <button type="button" class="btn btn-outline-secondary" onclick="editar(${i})"><i class="fas fa-pencil-alt"></i></button>
                    </div>
                </div>
            </div>`);
    }
}


function editar(indice){
    indiceSeleccionado = indice;
    console.log("Editar el registro " + indice);
    $('#formulario-edicion').fadeIn(100);
    $('#titulo').val(informacion[indice].titulo);
}


function guardarCambios(){
    informacion[indiceSeleccionado].titulo = $('#titulo').val();
    generarItems();
}