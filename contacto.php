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
  align-items: center;
  margin: 80px 0;
  justify-content: space-between;
}

.info-left h3 {
  width: 380px;
}

.info-left p {
  width: 530px;
}

.info-right p {
  width: 495px;
}

fieldset {
  padding: 50px;
}

.btn-enviar {
  width: 100%;
  text-align: center;
  background-color: rgb(255,192,203);
  padding: 10px;
  border-radius: 10px;
  transition: 0.5s;
}
.btn-enviar:hover {
  background-color: rgb(255,192,203,0.5);
  cursor: pointer;
}
</style>

<body>
<?php 
  require('componentes/navbar.php');
?>
  <div class="container">
    <div class="inicio">
      <div class="info-left">
        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
        <p>Praesent nec odio quis sem tincidunt venenatis. Nunc eleifend fringilla ligula, ac iaculis lorem rutrum id</p>
      </div>
    <form class="col s12">
      <fieldset>
        <h5>Formulario de Contacto</h5>
        <div class="row">
          <div class="input-field col s12">
            <input id="disabled" type="text" class="validate" placeholder="Nombre">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" placeholder="Celular/Whatsapp">
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" placeholder="Email">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" placeholder="Mensaje">
          </div>
        </div>
        <div class="btn-enviar">Enviar Mensaje</div>
      </fieldset>
    </form>
    </div>
  </div>
  
<?php 
  require('componentes/footer.php');
?>
</body>
</html>