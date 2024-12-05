<!DOCTYPE html>
<html lang="en">
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
      justify-content: space-between;
      max-width: 1200px;
      width: 100%;
      gap: 20px;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }
    .presentation.active {
      opacity: 1;
      transform: translateY(0);
    }
    .presentation img {
      width: 400px; /* Tamaño de la imagen aumentado */
      height: auto;
      border-radius: 10px;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
    }
    .presentation .text {
      max-width: 700px;
      font-size: 1.2em;
      line-height: 1.6;
      text-align: justify;
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
      <img src="images/teacher.webp" alt="Imagen del profesor">
      <div class="text">
        <p>
          Hola, mi nombre es <strong>Juan Pérez</strong>, profesor en la Universidad Autónoma de Tamaulipas. 
          Mi objetivo es acompañarte en tu desarrollo académico a través de clases dinámicas y enriquecedoras. 
          Con más de 10 años de experiencia en el área, estoy comprometido con tu aprendizaje y con fomentar 
          el crecimiento profesional de nuestros estudiantes.
        </p>
        <p>
          Si tienes alguna duda o comentario, no dudes en contactarme. Estoy aquí para apoyarte.
        </p>
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
    });

    // Mostrar la presentación una sola vez
    window.addEventListener("scroll", function () {
      var presentation = document.querySelector(".presentation");
      var position = presentation.getBoundingClientRect().top;
      var screenHeight = window.innerHeight;

      if (position < screenHeight - 100 && position > 0 && !presentation.classList.contains("active")) {
        presentation.classList.add("active");
      }
    });
  </script>
</body>
</html>
