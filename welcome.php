<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vercel - Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .wrapperCards{
            display: flex;
            flex-direction: column;
            gap: 40px;
            min-height: 80vh;
            justify-content: space-evenly;
            margin-bottom: 40px;
        }

        .icon{
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }


        .card-deck{
            margin-left: 0 !important;
            margin-right: 0 !important;
        }


        .navPadd{
            height: 100px !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navPadd">
    <a class="navbar-brand" href="/login-php/login.php">
        <img src="./imgs/iconVercel.webp" alt="icon" class="icon">
        Vercel
    </a>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambiar contraseña</a>
        <a href="logout.php" class="btn btn-danger ml-3">Cerrar sesión</a>
    </p>
</nav>
    <h1 class="my-5">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenido.</h1>

    <section class="wrapperCards">
        <!-- group 1 cards -->

<div class="card-deck">
  <div class="card">
    <img src="./imgs/animals.jpg" class="card-img-top" alt="animals">
    <div class="card-body">
      <h5 class="card-title">Animales</h5>
      <p class="card-text">Los animales son objetos extraidos de la intensificacion espacio lineal que no supera los ~500 < 100 = 200ft - 400rt, sin embargo algunos pueden ser diferentes.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Última actualización hace 3 mins</small>
    </div>
  </div>
  <div class="card">
    <img src="./imgs/fruits.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Frutas</h5>
      <p class="card-text">Las frutas contienen alto niveles de toxicidad en la parte interna de su concentración, es tan letal que puede causar TSX-V4, una enfermedad incurable y altamente letal. coma bien.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Última actualización hace 6 mins</small>
    </div>
  </div>
  <div class="card">
    <img src="./imgs/tech.jpg" class="card-img-top" alt="tech">
    <div class="card-body">
      <h5 class="card-title">Tecología</h5>
      <p class="card-text">En esta sección hablamos de la tecnología y el impulso narcicista que lleva a la gente a creer que no sabe nada a traves de un par de horas de practica hiperactiva profesional sin interrupcionees en expertis llamada, ver TikToks.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Última actualización hace 9 mins</small>
    </div>
  </div>
</div>


    <!-- group 2 cards -->


    
<div class="card-deck">
    <div class="card">
        <img src="./imgs/fruits.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Frutas</h5>
            <p class="card-text">Las frutas contienen alto niveles de toxicidad en la parte interna de su concentración, es tan letal que puede causar TSX-V4, una enfermedad incurable y altamente letal. coma bien.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Última actualización hace 6 mins</small>
        </div>
    </div>
    <div class="card">
      <img src="./imgs/animals.jpg" class="card-img-top" alt="animals">
      <div class="card-body">
        <h5 class="card-title">Animales</h5>
        <p class="card-text">Los animales son objetos extraidos de la intensificacion espacio lineal que no supera los ~500 < 100 = 200ft - 400rt, sin embargo algunos pueden ser diferentes.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Última actualización hace 3 mins</small>
      </div>
    </div>
  <div class="card">
    <img src="./imgs/tech.jpg" class="card-img-top" alt="tech">
    <div class="card-body">
      <h5 class="card-title">Tecología</h5>
      <p class="card-text">En esta sección hablamos de la tecnología y el impulso narcicista que lleva a la gente a creer que no sabe nada a traves de un par de horas de practica hiperactiva profesional sin interrupcionees en expertis llamada, ver TikToks.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Última actualización hace 9 mins</small>
    </div>
  </div>
</div>




<div class="card-deck">

    <div class="card">
    <img src="./imgs/tech.jpg" class="card-img-top" alt="tech">
    <div class="card-body">
      <h5 class="card-title">Tecología</h5>
      <p class="card-text">En esta sección hablamos de la tecnología y el impulso narcicista que lleva a la gente a creer que no sabe nada a traves de un par de horas de practica hiperactiva profesional sin interrupcionees en expertis llamada, ver TikToks.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Última actualización hace 9 mins</small>
    </div>
  </div>
  <div class="card">
        <img src="./imgs/fruits.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Frutas</h5>
            <p class="card-text">Las frutas contienen alto niveles de toxicidad en la parte interna de su concentración, es tan letal que puede causar TSX-V4, una enfermedad incurable y altamente letal. coma bien.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Última actualización hace 6 mins</small>
        </div>
    </div>
    <div class="card">
      <img src="./imgs/animals.jpg" class="card-img-top" alt="animals">
      <div class="card-body">
        <h5 class="card-title">Animales</h5>
        <p class="card-text">Los animales son objetos extraidos de la intensificacion espacio lineal que no supera los ~500 < 100 = 200ft - 400rt, sin embargo algunos pueden ser diferentes.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Última actualización hace 3 mins</small>
      </div>
    </div>
</div>


    <!-- group 3 cards -->
    <!-- <div class="card-deck">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div> -->
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>