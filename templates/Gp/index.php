<?php require "../../ligacao.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sinalização Digital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<div class="secao">
       


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">RRT<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#objetivos">Objetivos</a></li>
          <li><a class="nav-link scrollto" href="#etapas">Etapas</a></li>
          <li><a class="nav-link scrollto" href="#tec">Tecnologias e Técnicas</a></li>
          <li><a class="nav-link scrollto" href="#modelo">Modelo do sistema</a></li>
          <li><a class="nav-link scrollto" href="#galeria">Galeria</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipa</a></li>
          <li><a class="nav-link scrollto" href="#creditos">Créditos</a></li>
            <ul>
             
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#objetivos" class="get-started-btn scrollto">Vamos Começar</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Sinalização Digital<span>.</span></h1>
          <h2>Rui Neiva , Tiago Faria, Rafael Cerqueira</h2>
        </div>
      </div>

      
      </div>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Objetivos  ======= -->
    <section class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Sobre o Projeto</h3>
            <p>
              O presente projeto tem como objetivo a promoção eficiente e moderna dos vídeos produzidos pela nossa escola,
               bem como destacar as experiências enriquecedoras proporcionadas pelo programa Erasmus. Para atingir esses propósitos, propomos a implementação de um sistema de sinalização digital, utilizando três televisões estrategicamente distribuídas nas instalações escolares.
            </p>

            </ul>
            <p>
              
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Features Section ======= -->
    
    <section id="objetivos" class="features">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <p>Os nossos objetivos</p>
        </div>
        <div class="row">
          <div class="image col-lg-6" style='background-image: url("assets/img/features.jpg");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">

          <?php
            $sql = "SELECT `id`, `titulo`, `texto`, `imagem`, `link`, `codCat` FROM `ruratiArtigos` WHERE `codCat`=1 ORDER BY `titulo`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>

            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="<?=$row["imagem"];?>"></i>
              <h4><?=$row["titulo"];?></h4>
              <p><?=$row["texto"];?></p>
            </div>

            <?php
              }
            }     
            ?>

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="etapas" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Etapas</h2>
          <p>Etapas a seguir</p>
        </div>
<div class="row">
        <?php
            $sql = "SELECT `id`, `titulo`, `texto`, `imagem`, `link`, `codCat` FROM `ruratiArtigos` WHERE `codCat`=4 ORDER BY `titulo`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>

        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch  mt-4 mt-md-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="<?=$row["imagem"];?>"></i></div>
              <h4><a href="<?=$row["link"];?>"><?=$row["titulo"];?></a></h4>
              <p><?=$row["texto"];?></p>
            </div>
          </div>

          <?php
              }
            }     
            ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="tec" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Tecnologias e Técnicas</h3>
          <p>Java         |              HTML             |           PHP</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

    

    <!-- ======= Counts Section ======= -->
    <section id="modelo" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          
          <!--<div class="image col-xl-1 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100"></div> -->
          <div class="col-xl-11 ps-4 ps-lg-5 pe-4 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
            <div class="content d-flex flex-column justify-content-center">
            <div class="section-title">
              <h2>modelo</h2>
              <p>Modelo do Sistema</p>
            </div>

              <img src="../../imagens/ModeloSistema.drawio.png" class="img-fluid" alt="Responsive image">
<br>
              <?php
            $sql = "SELECT `id`, `titulo`, `texto`, `imagem`, `link`, `codCat` FROM `ruratiArtigos` WHERE `codCat`=2 ORDER BY `titulo`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>


              <p><?=$row["texto"];?></p>

              <?php
              }
            }     
            ?>
          
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="galeria" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeria</h2>
          <p>A nossa Galeria</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Fotos</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Foto 1</h4>
                <p>Foto</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto 1"><i class="bx bx-plus"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          
        
      
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
             <div class="portfolio-info">
              <h4>Foto 2</h4>
              <p>Foto</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto 2"><i class="bx bx-plus"></i></a>
              
              </div>
            </div>
         </div>
       </div>
       
       <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
             <div class="portfolio-info">
              <h4>Foto 3</h4>
              <p>Foto</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto 3"><i class="bx bx-plus"></i></a>
              
              </div>
            </div>
         </div>
       </div>

       <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
             <img src="assets/img/portfolio/portfolio-4.jpg.jpg" class="img-fluid" alt="">
             <div class="portfolio-info">
              <h4>Foto 4</h4>
              <p>Foto</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Foto 4"><i class="bx bx-plus"></i></a>
               
              </div>
            </div>
         </div>
       </div>




        </div>
        
        

      </div>
    </section><!-- End Portfolio Section -->
    
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Equipa</h2>
          <p>A Nossa Equipa</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rui Neiva</h4>
                <span>Chefe</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rafael Cerqueira</h4>
                <span>Chefe</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/tiago_faria_4/"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Tiago Faria</h4>
                <span>Chefe</span>
              </div>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>RRT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by Rui Neiva, Tiago Faria, Rafael Cerqueira</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="creditos"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>