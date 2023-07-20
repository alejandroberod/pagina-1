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

.servicios {
  display: flex;
  margin-bottom: 50px;
  gap: 150px;
}

.text-center {
    text-align: center;
}

.n-servicios {
    margin: 60px 0;
}

.card-title {
    color: black !important;
    background-color: rgba(193, 193, 193, 0.6);
    width: 100%;
    height: 100%;
    text-align: center;
}

</style>


<body>
<?php 
  require('componentes/navbar.php');
?>

<div class="n-servicios">
    <h4 class="color-gris text-center">Nuestros Servicios</h4>
</div>

<div class="container servicios">
  <div class="r">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="img/spa.png">
          <span class="card-title">Spa</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="r">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="img/peinado.png">
          <span class="card-title">Peinado</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="r">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="img/pedicure.png">
          <span class="card-title">Pedicure</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
</div> 

  
<?php 
  require('componentes/footer.php');
?>
</body>
</html>