<!DOCTYPE html>
<html lang="en">
<?php
require('./componentes/head.php');
?>
<style>
nav {
    background-color: #F0E8E2;
}

nav ul a{
    color: #595C60;
}

nav .brand-logo {
    color: #e5b1de;
}

.page-footer {
    background-color: #F0E8E2;
}

.color-gris {
  color: #595C60;
}

.color-rosa {
  color: #e5b1de;
}

.inicio {
  display: flex;
  gap: 200px;
  align-items: center;
  margin: 80px 0;
}

.info-left h3 {
  width: 380px;
}

.info-right p {
  width: 495px;
}

form {
    margin-top: 100px;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    border: 10px solid #595C60;
    padding: 20px;
}

.btn {
    width: 100%;
    background: rgb(89,92,96, 0.8);
}
.btn:hover {
    background-color: #595C60;
}

.resultado {
    text-align: center;
    background-color:red;
    width: 150px;
    margin: 0 auto;
}

.text-center {
    text-align: center;
}

.container2 {
    width: 500px;
    margin: 0 auto;
    margin-top: 40px;
}

</style>
<body>
<?php
require('./componentes/navbar.php')
?>
<div class="container">
    <form class="col s12" action="calculadora.php" method="post">
        <div class="row">
            <select class="browser-default" required name="operacion">
                <option value="" disabled selected>Seleccione Operación</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input type="text" class="validate" name="numero_1" placeholder="Numero 1" required>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input type="text" class="validate" name="numero_2" placeholder="Numero 2" required>
            </div>
            </div>
            <button class="btn">Operar</button>
    </form>
</div>

<?php

if(isset($_POST["numero_1"]) && isset($_POST["numero_2"]) && isset($_POST["operacion"])) {

    $numero1 = $_POST['numero_1'];
    $numero2 = $_POST['numero_2'];
    $operacion = $_POST['operacion'];
    
    if ($operacion == 'suma') {
        $resultado = $numero1 + $numero2;    
    } elseif ($operacion == 'resta') {
        $resultado = $numero1 - $numero2;
    } elseif ($operacion == 'multiplicacion') {
        $resultado = $numero1 * $numero2;
    } elseif ($operacion == 'division') {
        $resultado = $numero1 / $numero2;
    }
    // print "la " . $operacion." de " . $numero1 . " y " . $numero2 . " es igual a: " . $resultado;
    print "<div class='container2'>
            <div class='card-panel red lighten-4 text-center'>El resultado es: $resultado</div>
            </div>";
}
?>

</body>
</html>