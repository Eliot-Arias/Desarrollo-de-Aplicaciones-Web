function llamadaAsincrona(tipoLlamada) {
    var llamada = new XMLHttpRequest();
    
    if (tipoLlamada == 'ingreso') {
        llamada.open('POST', 'formularios/ingreso.php', true);
        llamada.setRequestHeader('Content-Type', 'application/x-www-form-urlencode');
        llamada.onreadystatechange = function () {
            document.getElementById('mostrar').innerHTML = llamada.responseText;
        };
        llamada.send();        
    }else if(tipoLlamada == 'registro'){
        llamada.open('POST', 'formularios/registro.php', true);
        llamada.setRequestHeader('Content-Type', 'application/x-www-form-urlencode');
        llamada.onreadystatechange = function () {
            document.getElementById('mostrar').innerHTML = llamada.responseText;
        };
        llamada.send();
    }
}
