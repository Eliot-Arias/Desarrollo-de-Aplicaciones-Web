<h2>Procesamiento en PHP</h2>
<hr color="red">
<?php
$sexo = $_GET['rdBtnSexo'];
#echo $sexo;
/*con if 
if($sexo == 'Masculino'){
    echo '<center><h2>Masculino</h2></center>';
}else if ($sexo == 'Femenino'){
    echo '<center><h2>Femenino</h2></center>';
}else{
    header("Location: http://localhost/AppBorrar/Desarrollo-de-Aplicaciones-Web/Taller2-Des-II/Ejercicio1/ejer1.html ");
}*/

/*Con Switch*/
switch($sexo){
    case 'Masculino':
        echo '<center><h2>Masculino</h2></center>';
        break;
    case 'Femenino':
        echo '<center><h2>Femenino</h2></center>';
        break;
    default:      
    header("Location: http://localhost/AppBorrar/Desarrollo-de-Aplicaciones-Web/Taller2-Des-II/Ejercicio1/ejer1.html ");

}


?>
<center>
    <h3>
        <a href="ejer1.html"></a>
    </h3>
</center>