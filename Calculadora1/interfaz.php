<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculadora.css">
    <title>Document</title>
</head>
<body>
    <div class="calculadora">
        <div class="calculadora--item">
            <input type="text" id="num1" placeholder="numero 1">
        </div>
        <div class="calculadora--item">
            <input type="text" id="num2" placeholder="numero 2">
        </div>
        <div class="calculadora--item">
            <button onclick='Suma()' class="calculadora--btn">+</button>
        </div>
        <div class="calculadora--item">
            <button onclick='Resta()' class="calculadora--btn">-</button>
        </div>
        <div class="calculadora--item">
            <button onclick='Division()' class="calculadora--btn">/</button>
        </div>
        <div class="calculadora--item">
            <button onclick='Multiplicacion()' class="calculadora--btn">*</button>
        </div>
        <div class="calculadora--item">
            <button onclick='Modulo()' class="calculadora--btn">%</button>
        </div>
    </div>
    <script>
        function datos(){
            num1 = document.getElementById('num1').value;
            num2 = document.getElementById('num2').value;
        }
        /* It takes the value of the input fields and sends them to the PHP file.*/
        function Suma(){     
            datos();       
            location.href='logica.php?operacion=suma&num1='+num1 +'&num2='+num2;
        }
        function Resta(){
            datos(); 
            location.href='logica.php?operacion=resta&num1='+num1 +'&num2='+num2;
        }
        function Division(){
            datos();  
            location.href='logica.php?operacion=division&num1='+num1 +'&num2='+num2;
        }
        function Multiplicacion(){  
            datos(); 
            location.href='logica.php?operacion=multiplicacion&num1='+num1 +'&num2='+num2;
        }
        function Modulo(){  
            datos(); 
            location.href='logica.php?operacion=modulo&num1='+num1 +'&num2='+num2;
        }
    </script>
</body>
</html>