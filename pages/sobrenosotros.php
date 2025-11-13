<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portafolio Profesional</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../styles/style.css" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <!--Link de bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>
<body>
    <header>
      <div class="pre-navbar">
        <a href="#" class="item -search" id="openSearch">Search</a>
        <div class="right">
          <a
            href="https://twitter.com/CiervoNegro"
            target="_blank"
            title="go twitter"
            class="item -social"
            ><i class="fa-brands fa-square-twitter"></i
          ></a>
          <a
            href="https://www.instagram.com/_ciervonegro_/"
            target="_blank"
            title="go instagaram"
            class="item -social"
            ><i class="fa-brands fa-square-instagram"></i
          ></a>
          <a
            href="https://www.facebook.com/Ciervo_negro"
            target="_blank"
            title="go facebook"
            class="item -social"
            ><i class="fa-brands fa-square-facebook"></i
          ></a>
          <a
            href="https://vimeo.com/CiervoNegro"
            target="_blank"
            title="go vimeo"
            class="item -social"
            ><i class="fa-brands fa-vimeo"></i
          ></a>

          <!-- <a href="#" class="item">Sign in</a>
          <a href="#" class="item">Login</a>
          <a href="#" class="item -cart">Cart(0)</a> -->
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-custom px-3" id="mainNavbar">
        <div class="collapse navbar-collapse navbar-centrado" id="navbarMain">
          <div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
              <li class="nav-item">
                <a class="nav-link" href="productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobrenosotros.php"
                  >Sobre Nosotros</a
                >
              </li>
            </ul>
          </div>
          <div>
            <li class="nav-item" style="list-style: none">
              <a class="nav-link" href="../index.php">
                <img
                  id="logo_principal"
                  src="../assets/logos/Logo_ciervo_negro_blanco.png"
                  alt="Logo marca"
                />
              </a>
            </li>
          </div>
          <div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="personalizar_indumentaria.php">Personalizar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ppff.php"
                  >Preguntas Frecuentes</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contacto.php">Contactos</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="icono-contenedor">
          <a href="./php/login.php" class="icono-usuario">
              <i class="fas fa-user icono"></i>
          </a>
        <div class="carrito-container">
          <a href="./php/header.php" id="carrito-toggle">
            <i class="fas fa-shopping-cart icono"></i>
            <span class="contador">
              <?php echo isset($_SESSION['carrito']) ? count($_SESSION['carrito']) : 0; ?>
            </span>
          </a> 
        </div>
      </nav>
    </header>
  <!-- HERO -->
  <section class="hero">
    <div class="hero-content">
      <h1>CIERVO NEGRO</h1>
      <a href="#" class="btn">TIENDA OFICIAL</a>
    </div>
  </section>

  <!-- INTRO -->
<section class="intro improved">
   <div class="intro-overlay"></div> 
   <div class="intro-container">
   <div class="intro-left">
      <h2>Aprenda a disfrutar cada minuto de su vida.</h2>
   
    <div class="intro-right animate">
      <p>Ciervo Negro nació en 2024 como una idea que, de a poco, se transformó en un proyecto lleno de pasión. Somos futboleros desde siempre. El fútbol es parte de nuestra vida: nos emociona, nos une y nos representa. Pero también sabemos que el fútbol no se vive solamente en la cancha. El fútbol se lleva en la piel, en los recuerdos, en las charlas con amigos y, sobre todo, en la forma de vestirnos y mostrarnos al mundo.
Con esa idea en mente, entendimos que algo faltaba. La indumentaria deportiva tradicional nos encanta, pero muchas veces no encaja en todos los ámbitos. No siempre podés ir con la camiseta a todos lados, y esa pasión terminaba guardada. Queríamos romper con eso. Queríamos que cualquiera pueda llevar a su club y a su barrio con orgullo en todo momento, en cada lugar, sin que desentone, sin tener que elegir entre estilo y sentimiento.
</p>
    </div>

    <div class="intro-right animate">
      <p>Así nació Ciervo Negro, con una propuesta distinta: prendas futboleras con diseño, con estética y con una identidad marcada. Una ropa que no solo representa la pasión por el fútbol, sino que también se adapta a la vida cotidiana, a cada ocasión.
Elegimos el bordado porque transmite exclusividad, cuidado y detalle. No buscamos hacer ropa masiva ni común. Cada prenda está pensada para ser única, para que quien la use sienta que lleva algo propio, irrepetible. Porque lo que vestimos no es solo tela: es historia, es identidad, es pertenencia. Es tu club, tu barrio, tu gente.
</p>
    </div>

    <div class="intro-right animate">
      <p>Nuestro sueño es grande. Queremos marcar una nueva tendencia en la Argentina, alcanzar a la mayoría de los clubes de todas las categorías y, con el tiempo, expandirnos hacia otros deportes que también representan la esencia de este país. Y más allá de las fronteras, llegar a nuevos lugares y contagiar esa forma distinta de vivir la pasión.
Pero Ciervo Negro no se limita únicamente al fútbol. Nuestro espíritu es crecer, evolucionar y abrazar todo tipo de tendencias que conecten con la identidad de las personas. Queremos que nuestra marca se convierta en un símbolo de estilo y de autenticidad, donde cada prenda sea una declaración: de quién sos, de lo que amás y de cómo elegís expresarte</p>
    </div>
     </div>
  </section>

  <!-- NUESTRAS VENTAJAS -->
  <section class="ventajas">
    <h2 class="animate">Nuestras ventajas</h2>
    <div class="ventajas-grid">
      <div class="ventaja animate">
        <div class="ventaja-icon">💡</div>
        <div>
          <h3>Estilo sin perder identidad futbolera</h3>
          <p>La marca logra combinar la pasión por el fútbol con un diseño estético y moderno, permitiendo vestir con orgullo al club o al barrio en cualquier lugar, sin desentonar ni tener que elegir entre elegancia y sentimiento.</p>
        </div>
      </div>
      <div class="ventaja animate">
        <div class="ventaja-icon">⚙️</div>
        <div>
          <h3>Exclusividad y detalle artesanal</h3>
          <p>Cada prenda es única y lleva un bordado que transmite cuidado, pertenencia e identidad. No es ropa masiva, sino una propuesta con valor simbólico y emocional.</p>
        </div>
      </div>
      <div class="ventaja animate">
        <div class="ventaja-icon">📈</div>
        <div>
          <h3>Expansión y conexión con la autenticidad</h3>
          <p>El proyecto busca trascender el fútbol, evolucionando hacia un símbolo de estilo y autenticidad que represente la esencia argentina y la identidad de las personas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section class="testimonios">
    <h2 class="animate">Testimonios</h2>
    <div class="testimonios-lista">
      <div class="testimonio animate">
        <img src="../assets/iconos/avatar.png" alt="Linda Hudson" />
        <div>
          <h4>Lucasbenitez1904</h4>
          <p>"@_ciervonegro excelente calidad y el bordado es genial"</p>
        </div>
      </div>
      <div class="testimonio animate">
        <img src="../assets/iconos/avatar.png" alt="Paul Larson" />
        <div>
          <h4>Roberto Garcia</h4>
          <p>"Excelente atencion. Calidad suprema"</p>
        </div>
      </div>
    </div>
  </section>
    <footer class="main-footer">
		<div class="l-container">
			<div class="menu">
				<h2 class="title">CATEGORIAS</h2>
				<div><a href="index.php" data--faq="" class="links">INICIO</a></div>
				<div><a href="./pages/productos.php" data--faq="" class="links">PRODUCTOS</a></div>
				<div><a href="./assets/Otro/guia_de_talles.png" target="_blank" class="links">GUIA DE TALLES</a></div>
				<div><a href="./pages/ppff.php" data--faq="" class="links">PREGUNTAS FRECUENTES</a></div>
			</div>
			<div class="menu -newsletter">
				<h2 class="title">Newsletter</h2>
				<blockquote class="description">
					Recibi las ultimas noticias y ofertas de Ciervo Negro
				</blockquote>
				<form action="//kirschnerbrasil.us13.list-manage.com/subscribe/post?u=1969413eccf5ec8e2c34fe9ac&amp;id=1c8e5bb591" target="_blank" method="post" id="FooterNewsletterForm">
					<input type="text" name="EMAIL" placeholder="mail@gmail.com" required="">
					<input type="hidden" name="b_1969413eccf5ec8e2c34fe9ac_1c8e5bb591" tabindex="-1" value="">
					<button type="submit" name="subscribe">send</button>
				</form>
			</div>
			<div class="menu">
				<h2 class="title">Follow Ciervo Negro</h2>
				<div><a href="https://www.facebook.com/Ciervo_negro" target="_blank" class="links">FACEBOOK</a></div>
				<div><a href="https://twitter.com/CiervoNegro" target="_blank" class="links">TWITTER</a></div>
				<div><a href="https://www.instagram.com/_ciervonegro_/" target="_blank" class="links">INSTAGRAM</a></div>
				<!-- <a href="#" class="links">ON THE BLOG</a> -->
			</div>
			<div id="bottom" class="bottom">
				<div id="links-credit" class="links-credit wrapper-links">
					<p class="copyright">© 2025 Ciervo Negro- Argentina &nbsp;|&nbsp; <a class="links -white -credits" id="credits">Site Credits</a></p>
					<!-- <a href="#" class="links -white">Privacy Policy</a>
					<a href="#" class="links -white">Terms & Conditions</a> -->

				</div>
				<div id="by" class="by">Design: <a href="http://www.madebysix.com/" target="_blank">Jonatan</a>  &nbsp;|&nbsp;  Build: <a href="http://andregumieri.com/?utm_source=kirschner&amp;utm_medium=site&amp;utm_campaign=assinatura" target="_blank">Jonatan</a></div>
			</div>
		</div>
	</footer>
  <script>
    // Animaciones de entrada al hacer scroll
    const elements = document.querySelectorAll('.animate');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, { threshold: 0.2 });

    elements.forEach(el => observer.observe(el));
  </script>

</body>
</html>


