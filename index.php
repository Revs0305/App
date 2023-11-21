<?php
// Comentario para probar Git
$whatsapp_g = "https://chat.whatsapp.com/D4cOIx2MU0AA8xO7DJTmGC";
$telegram_g = "https://t.me/+oFAJdHN5TRg0ZDNh";
// Leer URL
$parametro = $_GET['unah'];
// Validar si viene
// Básicamente en esa validación dice: si(existe($parametro))
if (isset($parametro)) {
  // Entonces voy a declarar una variable para guardar el mensaje
  //echo "El parámetro existe";
  $mensaje = "La aplicación solo está disponible para dispositivos Android. <br> Si usas iOS o PC, puedes visitar la página web.";
} else {
  // No mostramos nada
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
  <title>iRaffle TV</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand">
          <img src="assets/img/logow.png" alt="iRaffle Logo">
        </a>
        <div class="d-flex justify-content-end align-items-center social-items">
          <a href="<?=$whatsapp_g?>" class="text-white mr-3 text-decoration-none d-flex align-items-center" target="_blank">
            <ion-icon name="logo-whatsapp" class="logo-whatsapp"></ion-icon>
            <span class="align-middle">WhatsApp</span>
          </a>
          <a href="<?=$telegram_g?>" class="text-white mr-3 text-decoration-none d-flex align-items-center" target="_blank">
            <i class='bx bxl-telegram logo-telegram'></i>
            <span class="align-middle">Telegram</span>
          </a>
        </div>
      </div>
    </nav>
  </header>

  <section class="hero">
    <video autoplay muted loop id="bg-video">
      <source src="assets/vid/bg.mp4" type="video/mp4">
      Tu navegador no soporta el elemento de video.
    </video>
    <div class="overlay"></div>
    <div class="container text-center text-white">
      <h1 class="display-2">iRaffle TV</h1>
      <p class="lead">Descarga la mejor aplicación para ver deportes y televisión 100% gratis.</p>
      <div class="row">
        <div class="col-6">
          <a href="assets/app.apk" class="btn btn-primary btn-lg download-btn" target="_blank">
            <ion-icon name="logo-android" class="android-icon"></ion-icon>
            <span class="download-text">Descargar Android</span>
          </a>
        </div>
        <div class="col-6">
          <a href="https://irtvhn.info?appLanding" class="btn btn-primary btn-lg download-btn" target="_blank">
            <ion-icon name="logo-android" class="android-icon"></ion-icon>
            <span class="download-text">Visitar iOS | PC</span>
          </a>
        </div>
        <br>
        <!-- Mostramos el mensaje -->
        <?php if (isset($mensaje)) { ?>
          <div class="text-center alert alert-success" role="alert">
            <p>
              <?php echo $mensaje ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>
