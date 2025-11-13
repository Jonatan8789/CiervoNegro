<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <!--Link archivos de estilos-->
    <link rel="stylesheet" href="./styles/style.css" />
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
    <title>CIERVO - NEGRO</title>
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
              <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
              <li class="nav-item">
                <a class="nav-link" href="pages/productos.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/sobrenosotros.php"
                  >Sobre Nosotros</a
                >
              </li>
            </ul>
          </div>
          <div>
            <li class="nav-item" style="list-style: none">
              <a class="nav-link" href="pages/index.php">
                <img
                  id="logo_principal"
                  src="./assets/logos/Logo_ciervo_negro_blanco.png"
                  alt="Logo marca"
                />
              </a>
            </li>
          </div>
          <div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="pages/personalizar_indumentaria.php">Personalizar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/ppff.php"
                  >Preguntas Frecuentes</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/contacto.php">Contactos</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="icono-contenedor">
          <a href="./pages/login.php" class="icono-usuario">
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
    <main>
      <section class="banner-header">
        <div class="banner-header-content">
          <div class="intro">Introducing</div>
          <h1 class="title">CIERVO NEGRO</h1>
          <div class="subtitle">Somos la mejor opción</div>
        </div>
      </section>
      <section class="promo-grid" >
        <div
          class="promo-card"
          style="background-image: url('./assets/productos/CN_Julio_2526.jpg')"
          data-aos="flip-up"
        >
          <div class="promo-content">
            <h2>REMERAS</h2>
            <p>Norway</p>
            <a href="#">DETALLES</a>
          </div>
        </div>
        <div
          class="promo-card"
          style="background-image: url('./assets/productos/CN_Julio_2518.jpg')"
          data-aos="flip-up"
        >
          <div class="promo-content">
            <h2>BUZOS</h2>
            <p>Our Race Kit</p>
            <a href="#">DETALLES</a>
          </div>
        </div>
        <div
          class="promo-card"
          style="background-image: url('./assets/productos/CN_Julio_2506.jpg')"
          data-aos="flip-up"
        >
          <div class="promo-content">
            <h2>CAMPERAS</h2>
            <p>Santa Catarina</p>
            <a href="#">DETALLES</a>
          </div>
        </div>
      </section>
      <section class="testimonios-clientes">
          <h3>Lo que dicen nuestros clientes</h3>
          <div class="testimonios">
            <div class="testimonio">
              <p>"HG Mates siempre responde rápido y con excelente calidad."</p>
              <span>– Carla M., Mercedes-Benz</span>
            </div>
            <div class="testimonio">
              <p>
                "Nuestros empleados aman los productos. ¡Gracias por la atención
                personalizada!"
              </p>
              <span>– Martín A., Google</span>
            </div>
          </div>
      </section>
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      const navbar = document.getElementById("mainNavbar");
      const logo = document.getElementById("logo_principal");

      let scrolled = false; // Estado para controlar el cambio

      window.addEventListener("scroll", function () {
        if (window.scrollY > 50 && !scrolled) {
          scrolled = true;
          navbar.classList.add("scrolled");

          logo.style.opacity = 0;
          setTimeout(() => {
            logo.src = "./assets/logos/Logo_ciervo.png";
            logo.style.opacity = 1;
          }, 200);
        } else if (window.scrollY <= 50 && scrolled) {
          scrolled = false;
          navbar.classList.remove("scrolled");

          logo.style.opacity = 0;
          setTimeout(() => {
            logo.src = "./assets/logos/Logo_ciervo_negro_blanco.png";
            logo.style.opacity = 1;
          }, 200);
        }
      });
    </script>

    
  </body>
</html>
