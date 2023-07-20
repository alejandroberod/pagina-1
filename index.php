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
      <div class="info-right">
        <img src="img/facial.png" alt="">
        <h5>Lorem impsum dolor</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, maiores. Exercitationem nesciunt sapiente perferendis molestias distinctio maiores, velit similique vel.</p>
      </div>
    </div>
  </div>
  
<?php 
  require('componentes/footer.php');
?>
</body>
</html>