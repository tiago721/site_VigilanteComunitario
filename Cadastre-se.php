<?php
session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Cadastre-se.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/WhatsAppImage2021-11-22at11.26.29.jpeg",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Cadastre-se">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-header" id="sec-1696">
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <?php
        ob_start();
        include("quadro.php");
        $html = ob_get_clean();
        $variavel = "";
        ob_start();
        include("quadro2.php");
        $html2 = ob_get_clean();
        $variavel2 = "";
        if ($_SESSION) {
          echo $html;
        } else {
          echo $html2;
        }
        ?>
      </div>
    </div>
    <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
        <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
          <svg>
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
          </svg>
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
              <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                <rect y="1" width="16" height="2"></rect>
                <rect y="7" width="16" height="2"></rect>
                <rect y="13" width="16" height="2"></rect>
              </symbol>
            </defs>
          </svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        <ul class="u-nav u-spacing-2 u-unstyled u-nav-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
          <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-radius-50 u-text-active-grey-90 u-text-grey-90 u-text-hover-black" href="Home.php" style="padding: 10px 20px;">Home</a>
          </li>
          <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-radius-50 u-text-active-grey-90 u-text-grey-90 u-text-hover-black" href="Visualizador.php" style="padding: 10px 20px;">Visualizador</a>
          </li>
          <li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-grey-10 u-nav-link u-radius-50 u-text-active-grey-90 u-text-grey-90 u-text-hover-black" href="Cadastre-se.php" style="padding: 10px 20px;">Cadastre-se</a>
        </ul>
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-inner-container-layout u-sidenav-overflow">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Home</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Visualizador.php" style="padding: 10px 20px;">Visualizador</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cadastre-se.php" style="padding: 10px 20px;">Cadastre-se</a>
            </ul>
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><a href="Home.php" data-page-id="224677288" class="u-align-left u-image u-logo u-image-1" data-image-width="500" data-image-height="500" title="Home">
      <img src="images/WhatsAppImage2021-11-22at11.26.29.jpeg" class="u-logo-image u-logo-image-1">
    </a>
  </header>
  <section class="u-clearfix u-gradient u-valign-middle-xs u-section-1" id="carousel_780a">
    <div class="u-expanded-width u-shape u-shape-rectangle u-shape-1"></div>
    <img class="u-image u-image-default u-image-1" src="images/Untitled-2.png" alt="" data-image-width="688" data-image-height="432">
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
            <div class="u-container-layout u-valign-bottom-xs u-container-layout-1">
              <h3 class="u-text u-text-body-alt-color u-text-default u-text-1"> Junte-se a NÓS E TORNE-SE TAMBÉM UM
                VIGILANTE</h3>
              <h6 class="u-custom-font u-text u-text-font u-text-2"> Acesse gratuitamente todos os nossos conteúdos, se
                inscreva e acompanhe todas nossas atualizações.</h6>
              <div class="u-hidden-md u-social-icons u-spacing-20 u-social-icons-1">
                <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f107"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f107" class="u-svg-content">
                      <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z">
                      </path>
                    </svg>
                  </span>
                </a>
                <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-2">
                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                      <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4718"></use>
                    </svg>
                    <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-4718" class="u-svg-content">
                      <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z">
                      </path>
                      <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                      </path>
                      <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z">
                      </path>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
            <div class="u-container-layout u-valign-top u-container-layout-2">
              <div class="u-form u-form-1">
                <form action="cadastro.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" style="padding: 10px; margin-top: -30px" source="custom" name="form" redirect="true">
                  <div class="u-form-group u-form-group-1">
                    <label for="text-3f05" class="u-form-control-hidden u-label u-text-body-alt-color u-label-1"></label>
                    <input type="text" placeholder="Nome" id="text-3f05" name="nome" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-1" required="required">
                  </div>
                  <div class="u-form-group u-form-group-2">
                    <label for="text-0bcc" class="u-form-control-hidden u-label u-text-body-alt-color u-label-2"></label>
                    <input type="text" placeholder="Sobrenome" id="text-0bcc" name="sobrenome" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-2" required="required">
                  </div>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-771a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-3"></label>
                    <input type="text" placeholder="User Name" id="text-771a" name="usuario" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-3" required="required">
                  </div>
                  <div class="u-form-email u-form-group u-form-group-4">
                    <label for="email-319a" class="u-form-control-hidden u-label u-text-body-alt-color u-label-4"></label>
                    <input type="email" placeholder="Enter a valid email address" id="email-319a" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-4" required="">
                  </div>
                  <div class="u-form-group u-form-group-5">
                    <label for="text-72e9" class="u-form-control-hidden u-label u-text-body-alt-color u-label-5"></label>
                    <input type="password" placeholder="Senha" id="text-72e9" name="senha" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-5" required="required">
                  </div>
                  <div class="u-form-group u-form-group-6">
                    <label for="text-6eab" class="u-form-control-hidden u-label u-text-body-alt-color u-label-6"></label>
                    <input type="password" placeholder="Repita sua senha" id="text-6eab" name="senha2" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-white u-input-6" required="required">
                  </div>
                  <div class="u-form-checkbox u-form-group u-form-group-3">
                    <input type="checkbox" id="checkbox-404b" name="checkbox" value="On" required="required">
                    <label for="checkbox-404b" class="u-label u-label-3 u-label u-text-body-alt-color u-label-6" style="font-size: 15px;"> Eu concordo com os Termos e
                      Condições do Vigilante Comunitário.com.br</label>
                  </div>
                  <div class="u-align-left u-form-group u-form-submit u-form-group-7">
                    <a href="#" class="u-btn u-btn-submit u-button-style u-custom-font u-font-montserrat u-white u-btn-1">Cadastre-me</a>
                    <input type="submit" value="submit" class="u-form-control-hidden">
                  </div>
                  <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                  <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-white u-footer" id="sec-770a">
    <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
      <a href="Home.php" data-page-id="224677288" class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-image u-logo u-image-1" data-image-width="500" data-image-height="500" title="Home">
        <img src="images/WhatsAppImage2021-11-22at11.26.29.jpeg" class="u-logo-image u-logo-image-1">
      </a>
      <p class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-text u-text-1"> O
        Vigilante Cominitário é uma plataforma digital que atua na gestão de câmeras de seguranças atuando para criação
        de uma rede comunitária de monitoramento.<br>Trata-se de uma iniciativa academica desenvolvida entre alunos do
        curso Alalise e Desenvolvimento de Sistemas da Estácio - Curitiba coordenado pelo professor Douglas Mendes.
      </p>
      <div class="u-align-center-xs u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c52c"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-c52c">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e81f"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e81f">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1a9b"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1a9b">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
              </path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
            </svg></span>
        </a>
        <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-25e4"></use>
            </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-25e4">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
              <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
            </svg></span>
        </a>
      </div>
    </div>
  </footer>
</body>

</html>