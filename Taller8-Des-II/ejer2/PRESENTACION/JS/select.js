$(document).ready(function(){
    console.log("jQuery Xd");
});

function enviarIdPais(idPais){
    $.ajax({
        url: '../../LOGICA/util1.php',
        type: 'GET',
        data: {idPais},
        dataType: 'json',
        success: function (response) {
            resHTML = "";
            
            response.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `;
                console.log(resHTML);
            });
            $('#selectDepartamento').html(resHTML);
        }        
    })
    
}

function enviarIdDepartamento(IdDepartamento){
    $.ajax({
        url: '../../LOGICA/util1.php',
        type: 'GET',
        data: {IdDepartamento},
        dataType: 'json',
        success: function (response) {
            resHTML = "";
            response.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `;
            });
            $('#selectProvincia').html(resHTML);
        }
    })
}
