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

.text-center {
    text-align: center;
}

.n-servicios {
    margin: 60px 0;
}

.productos {
    display: flex;
    gap: 150px;
    margin-bottom: 100px;
}

.producto {
    flex-basis: 300px;
}

.producto img {
    width: 100%;
}



</style>


<body>
<?php 
  require('componentes/navbar.php');
?>

<div class="n-servicios">
    <h4 class="color-gris text-center">Productos</h4>
</div>
<div class="container">
    <div class="productos">
        <div class="producto">
            <img src="img/crema.png" alt="crema">
            <div class="descripcion">
                <h5>Crema</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, maiores.</p>
            </div>
        </div>
        <div class="producto">
            <img src="img/maquillaje.png" alt="crema">
            <div class="descripcion">
                <h5>Maquillaje</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, maiores.</p>
            </div>
        </div>
        <div class="producto">
            <img src="img/shampoo.png" alt="crema">
            <div class="descripcion">
                <h5>Shampoo</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, maiores.</p>
            </div>
        </div>
    </div>
</div>
  
<?php 
  require('componentes/footer.php');
?>
</body>
</html>