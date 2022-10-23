'use strict'
//Curso Android Precio y Duracion
var androidPrecio = 300;
var androidDuracion = 10;
//Curso PHP Precio y Duracion
var phpPrecio = 350;
var phpDuracion = 12;
//Curso Java Precio y Duracion
var javaPrecio = 200;
var javaDuracion = 9;

//Seleccionado el combobox
var cursoSeleccionado = document.getElementById('curso');

//Seleccionando el input para cambiar el valor del precio Mensual.
var precioMensual = document.getElementById('precioMensual');

//Seleccionando el input para cambiar el valor de la duracion.
var duracionMes = document.getElementById('duracionMes');

function mostarPrecio(){
    switch(cursoSeleccionado.value){
        case 'Android':
            precioMensual.value = androidPrecio;
            break;
        case 'PHP':
            precioMensual.value = phpPrecio;
            break;
        case 'JAVA':
            precioMensual.value = javaPrecio;
            break;
        default:
            precioMensual.value = "";
    }
}

function mostrarDuracion(){   
    switch(cursoSeleccionado.value){
        case 'Android':
            duracionMes.value = androidDuracion;
            break;
        case 'PHP':
            duracionMes.value = phpDuracion;
            break;
        case 'JAVA':
            duracionMes.value = javaDuracion;
            break;
        default:
            duracionMes.value = "";
            alert('Debes de seleccionar un Curso');
    }
}

cursoSeleccionado.addEventListener('change', (event) => {
    mostarPrecio();
    mostrarDuracion();
});



function comprobar(){
    if ((duracionMes.value) == '' && (precioMensual.value) == '') {
        alert("Debe de selccionar un curso");
    }

    //Validando la forma de pago.
    var validar1 = document.getElementById('dscto').checked;
    var validar2 = document.getElementById('sinDscto').checked;
    
    if (validar1 == false && validar2 == false){
        alert("Debe de seleccionar una forma de pago");
    }

    //Validando Nombre
    var nombre = document.getElementById('nombreEstudiante');

    if((nombre.value) == ''){
        alert("Debes de poner tu nombre ahi papu :v");
    }
}



