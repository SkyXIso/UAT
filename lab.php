<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UAT</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: Arial, sans-serif;
    }
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-around;
      padding: 30px 20px;
      z-index: 10;
      background: rgba(0, 0, 0, 0.6);
      transition: 0.7s;
    }
    header.abajo {
      background: white;
      padding: 15px 20px;
    }
    header .logo {
      background: url('images/uat.png') no-repeat left center;
      background-size: contain;
      width: 100px;
      height: 50px;
    }
    nav {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    header ul {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    header ul li {
      list-style: none;
    }
    header ul a {
      margin: 0 15px;
      text-decoration: none;
      color: rgb(255, 255, 255);
      font-weight: 600;
      transition: 0.7s;
    }
    .zona1 {
      width: 100%;
      min-height: 100vh;
      background: url('images/Uatv.jpg') no-repeat center center;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container-cover {
      width: 100%;
      min-height: 100vh;
      background: linear-gradient(30deg, rgba(169, 169, 169, 0.85), rgba(128, 128, 128, 0.85));
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      padding: 40px 20px;
    }
    .container-cover h1 {
      font-size: 3em;
      margin-bottom: 20px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }
    .presentation {
      display: flex;
      align-items: center;
      justify-content: center;
      max-width: 1200px;
      width: 100%;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .presentation.active {
      opacity: 1;
      transform: translateY(0);
    }
    .presentation .text {
      max-width: 700px;
      font-size: 1.2em;
      line-height: 1.6;
      text-align: justify;
    }
    .download-section {
      width: 100%;
      max-width: 1200px;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 40px 20px;
      text-align: center;
      margin-top: 40px;
      border-radius: 10px;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .download-section.active {
      opacity: 1;
      transform: translateY(0);
    }
    .download-section h2 {
      font-size: 2.5em;
      margin-bottom: 20px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }
    .download-buttons {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .download-button {
      background: #008CBA;
      color: white;
      padding: 15px 30px;
      font-size: 1.1em;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.3s;
    }
    .download-button:hover {
      background: #005f6b;
    }
    footer {
      text-align: center;
      padding: 20px;
      background: #111;
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <a href="#" class="logo"></a>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="lab.php">Laboratorios</a></li>
        <li><a href="#">Clases</a></li>
        <li><a href="main.php">Comentarios</a></li>
      </ul>
    </nav>
  </header>

  <section class="zona1"></section>

  <div class="container-cover">
    <h1>Bienvenidos</h1>
    <div class="presentation">
      <div class="text">
        <p>
          ¡Bienvenido a la página de Laboratorios de la Universidad Autónoma de Tamaulipas! 
          Aquí podrás acceder a los laboratorios más recientes subidos por los profesores. 
          Para interactuar, simplemente selecciona uno de los laboratorios disponibles.
        </p>
        <p>
          Si tienes dudas o comentarios, no dudes en contactarnos. ¡Estamos aquí para ayudarte!
        </p>
      </div>
    </div>

    <!-- Sección de Descargas integrada -->
    <div class="download-section">
      <h2>Descarga los laboratorios disponibles</h2>
      <p>Haz clic en los siguientes enlaces para descargar los archivos correspondientes:</p>
      <div class="download-buttons">
        <a href="lab1.pdf" class="download-button" download="Laboratorio_1">Laboratorio 1</a>
        <a href="lab2.pdf" class="download-button" download="Laboratorio_2">Laboratorio 2</a>
        <a href="lab3.pdf" class="download-button" download="Laboratorio_3">Laboratorio 3</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2024 UAT. Todos los derechos reservados.</p>
  </footer>

  <script>
  // Cambiar estilo del header al hacer scroll
  window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("abajo", window.scrollY > 0);

    // Mostrar la presentación con animación una sola vez
    var presentation = document.querySelector(".presentation");
    var downloadSection = document.querySelector(".download-section");
    var positionPresentation = presentation.getBoundingClientRect().top;
    var positionDownload = downloadSection.getBoundingClientRect().top;
    var screenHeight = window.innerHeight;

    if (positionPresentation < screenHeight - 100 && !presentation.classList.contains("active")) {
      presentation.classList.add("active");
    }

    if (positionDownload < screenHeight - 100 && !downloadSection.classList.contains("active")) {
      downloadSection.classList.add("active");
    }
  });
</script>
</body>
</html>
