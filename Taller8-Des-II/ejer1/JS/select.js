/* $(document).ready(function(){
console.log("jQuery Xd")
});*/

function enviarIdFamilia(idFamilia){
    $.ajax({
        url: '../AJAX/util1.php',
        type: 'GET',
        data: {idFamilia},
        dataType: 'json',
        success: function (response) {
            resHTML = "";
            response.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `;
            });
            $('#selectCategoria').html(resHTML);
        }
    })
}

function enviarIdCategoria(idCategoria){
    $.ajax({
        url: '../AJAX/util1.php',
        type: 'GET',
        data: {idCategoria},
        dataType: 'json',
        success: function (response) {
            resHTML = "";
            response.forEach(res => {
                resHTML += `
                    <option value="${res.id}">${res.nombre}</option>
                `;
            });
            $('#selectProducto').html(resHTML);
        }
    })
}
