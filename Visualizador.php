<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Empire State Building, Empire State Building, Sample Headline">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Visualizador</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="Visualizador.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



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
  <meta property="og:title" content="Visualizador">
  <meta property="og:type" content="website">
</head>

<body class="u-body">
  <header class="move-cabecalho u-clearfix u-header u-header" id="sec-1696">
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
      <div class="move-menu menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
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
  <section class="u-clearfix u-gradient u-section-1" id="sec-13e6">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
      <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
              <h1 class="u-custom-item u-text u-text-default u-text-palette-3-base u-title u-text-1" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="5000">72</h1>
              <p class="u-text u-text-body-alt-color u-text-2">Usuários Vigilantes</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
              <h1 class="u-custom-item u-text u-text-default u-text-palette-3-base u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">100</h1>
              <p class="u-text u-text-body-alt-color u-text-4">Alertas Gerados</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
              <h1 class="u-custom-item u-text u-text-default u-text-palette-3-base u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">87</h1>
              <p class="u-text u-text-body-alt-color u-text-6">Câmeras Compartilhadas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-white u-section-2" id="sec-0af0">

    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-align-center u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gutter-8 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-size-12-lg u-size-12-xl u-size-14-md u-size-14-sm u-size-14-xs u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <h2 class="u-align-center u-text u-text-1">Rede de Vigilancia Comunitári<span style="font-weight: 700;"></span>a
                </h2>
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-radius-5 u-repeater-item u-shape-round u-white u-list-item-1">
                      <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-align-left u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-db22"></use>
                          </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-db22" style="enable-background:new 0 0 512 512;">
                            <g>
                              <g>
                                <path d="M439.669,481.888L238.293,375.264c-5.248-2.784-11.648-2.4-16.608,0.96L67.701,482.848c-5.76,4-8.256,11.264-6.144,17.952    c2.048,6.624,8.256,11.2,15.232,11.2h355.36c7.328,0,13.76-4.992,15.52-12.16C449.461,492.704,446.133,485.312,439.669,481.888z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M507.061,451.488l-47.36-213.216c-1.152-5.216-4.832-9.472-9.792-11.424c-4.992-1.952-10.592-1.28-14.944,1.728    L280.949,335.2c-4.608,3.2-7.2,8.544-6.848,14.08c0.32,5.6,3.552,10.592,8.48,13.184l201.344,106.624    c2.368,1.248,4.928,1.888,7.488,1.888c3.424,0,6.848-1.088,9.696-3.296C506.069,463.904,508.405,457.6,507.061,451.488z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M395.637,203.232c-2.112-6.688-8.288-11.232-15.296-11.232H234.293c-26.56,48.096-65.856,94.08-82.016,112.064    C143.189,314.176,130.165,320,116.565,320s-26.624-5.824-35.712-15.936c-6.24-6.944-15.904-18.048-26.976-31.808l-38.72,174.272    c-1.408,6.432,1.248,13.056,6.688,16.736c2.688,1.824,5.824,2.72,8.928,2.72c3.2,0,6.368-0.928,9.12-2.848L389.429,221.12    C395.221,217.184,397.685,209.92,395.637,203.232z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M116.565,0c-61.76,0-112,50.24-112,112c0,57.472,89.856,159.264,100.096,170.688c3.04,3.36,7.36,5.312,11.904,5.312    s8.864-1.952,11.904-5.312C138.709,271.264,228.565,169.472,228.565,112C228.565,50.24,178.325,0,116.565,0z M116.565,160    c-26.496,0-48-21.504-48-48c0-26.496,21.504-48,48-48c26.496,0,48,21.504,48,48C164.565,138.496,143.061,160,116.565,160z">
                                </path>
                              </g>
                            </g>
                          </svg></span>
                        <p class="u-align-right u-text u-text-grey-70 u-text-2">Rua André Nadolny, 762</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-3">Roça Grande</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-4">Colombo-PR</p>
                      </div>
                    </div>
                    <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-radius-5 u-repeater-item u-shape-round u-white u-list-item-2">
                      <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-align-left u-icon u-icon-circle u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1f77"></use>
                          </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-1f77" style="enable-background:new 0 0 512 512;">
                            <g>
                              <g>
                                <path d="M439.669,481.888L238.293,375.264c-5.248-2.784-11.648-2.4-16.608,0.96L67.701,482.848c-5.76,4-8.256,11.264-6.144,17.952    c2.048,6.624,8.256,11.2,15.232,11.2h355.36c7.328,0,13.76-4.992,15.52-12.16C449.461,492.704,446.133,485.312,439.669,481.888z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M507.061,451.488l-47.36-213.216c-1.152-5.216-4.832-9.472-9.792-11.424c-4.992-1.952-10.592-1.28-14.944,1.728    L280.949,335.2c-4.608,3.2-7.2,8.544-6.848,14.08c0.32,5.6,3.552,10.592,8.48,13.184l201.344,106.624    c2.368,1.248,4.928,1.888,7.488,1.888c3.424,0,6.848-1.088,9.696-3.296C506.069,463.904,508.405,457.6,507.061,451.488z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M395.637,203.232c-2.112-6.688-8.288-11.232-15.296-11.232H234.293c-26.56,48.096-65.856,94.08-82.016,112.064    C143.189,314.176,130.165,320,116.565,320s-26.624-5.824-35.712-15.936c-6.24-6.944-15.904-18.048-26.976-31.808l-38.72,174.272    c-1.408,6.432,1.248,13.056,6.688,16.736c2.688,1.824,5.824,2.72,8.928,2.72c3.2,0,6.368-0.928,9.12-2.848L389.429,221.12    C395.221,217.184,397.685,209.92,395.637,203.232z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M116.565,0c-61.76,0-112,50.24-112,112c0,57.472,89.856,159.264,100.096,170.688c3.04,3.36,7.36,5.312,11.904,5.312    s8.864-1.952,11.904-5.312C138.709,271.264,228.565,169.472,228.565,112C228.565,50.24,178.325,0,116.565,0z M116.565,160    c-26.496,0-48-21.504-48-48c0-26.496,21.504-48,48-48c26.496,0,48,21.504,48,48C164.565,138.496,143.061,160,116.565,160z">
                                </path>
                              </g>
                            </g>
                          </svg></span>
                        <p class="u-align-right u-text u-text-grey-70 u-text-5">Rua Alferes Poli, 2345</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-6">Centro</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-7">Curitiba-PR</p>
                      </div>
                    </div>
                    <div class="u-align-center u-border-1 u-border-grey-15 u-container-style u-list-item u-radius-5 u-repeater-item u-shape-round u-white u-list-item-3">
                      <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-align-left u-icon u-icon-circle u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-39e9"></use>
                          </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-39e9" style="enable-background:new 0 0 512 512;">
                            <g>
                              <g>
                                <path d="M439.669,481.888L238.293,375.264c-5.248-2.784-11.648-2.4-16.608,0.96L67.701,482.848c-5.76,4-8.256,11.264-6.144,17.952    c2.048,6.624,8.256,11.2,15.232,11.2h355.36c7.328,0,13.76-4.992,15.52-12.16C449.461,492.704,446.133,485.312,439.669,481.888z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M507.061,451.488l-47.36-213.216c-1.152-5.216-4.832-9.472-9.792-11.424c-4.992-1.952-10.592-1.28-14.944,1.728    L280.949,335.2c-4.608,3.2-7.2,8.544-6.848,14.08c0.32,5.6,3.552,10.592,8.48,13.184l201.344,106.624    c2.368,1.248,4.928,1.888,7.488,1.888c3.424,0,6.848-1.088,9.696-3.296C506.069,463.904,508.405,457.6,507.061,451.488z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M395.637,203.232c-2.112-6.688-8.288-11.232-15.296-11.232H234.293c-26.56,48.096-65.856,94.08-82.016,112.064    C143.189,314.176,130.165,320,116.565,320s-26.624-5.824-35.712-15.936c-6.24-6.944-15.904-18.048-26.976-31.808l-38.72,174.272    c-1.408,6.432,1.248,13.056,6.688,16.736c2.688,1.824,5.824,2.72,8.928,2.72c3.2,0,6.368-0.928,9.12-2.848L389.429,221.12    C395.221,217.184,397.685,209.92,395.637,203.232z">
                                </path>
                              </g>
                            </g>
                            <g>
                              <g>
                                <path d="M116.565,0c-61.76,0-112,50.24-112,112c0,57.472,89.856,159.264,100.096,170.688c3.04,3.36,7.36,5.312,11.904,5.312    s8.864-1.952,11.904-5.312C138.709,271.264,228.565,169.472,228.565,112C228.565,50.24,178.325,0,116.565,0z M116.565,160    c-26.496,0-48-21.504-48-48c0-26.496,21.504-48,48-48c26.496,0,48,21.504,48,48C164.565,138.496,143.061,160,116.565,160z">
                                </path>
                              </g>
                            </g>
                          </svg></span>
                        <p class="u-align-right u-text u-text-grey-70 u-text-8">Rua João Ramalho, 386</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-9">Bairro Alto</p>
                        <p class="u-align-right u-text u-text-custom-color-2 u-text-10">Curitiba-PR</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-size-31-md u-size-31-sm u-size-31-xs u-size-33-lg u-size-33-xl u-layout-cell-2">
              <div class="u-container-layout u-container-layout-5">
                <div class="u-border-1 u-border-grey-15 u-container-style u-expanded-width-xs u-group u-radius-20 u-shape-round u-white u-group-1">
                  <div class="u-container-layout u-container-layout-6">
                    <div class="u-clearfix u-custom-html u-custom-html-1">
                      <meta charset="UTF-8">
                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <title></title>
                      <link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
                      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
                      <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet">
                      <div id="map"></div>
                      <div id="popup" class="ol-popup">
                        <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                        <div id="popup-content"></div>
                      </div>
                      <script>
                        // Where you want to render the map.
                        var element = document.getElementById('map');
                        // Height has to be set. You can do this in CSS too.
                        element.style = 'height:800px;';
                        // Create Leaflet map on map element.
                        var map = L.map(element);
                        // Add OSM tile layer to the Leaflet map.
                        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                          attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
                        // Target's GPS coordinates.
                        var target = L.latLng('-25.351856', '-49.206605');
                        var cond_01 = L.latLng('-25.353510', '-49.207215');
                        // Set map's center to target with zoom 14.
                        map.setView(target, 17);
                        // Place a marker on the same location.
                        L.marker(target).addTo(map).bindPopup('<iframe width="300" height="300" src="https://rtsp.me/embed/83kfRRiR/" frameborder="0" allowfullscreen></iframe>');;
                        L.marker(cond_01).addTo(map).bindPopup('<iframe width="300" height="300" src="https://rtsp.me/embed/83kfRRiR/" frameborder="0" allowfullscreen></iframe>');;
                        //POP-UP
                        // create the popup
                        const popup = new mapboxgl.Popup({
                          offset: 25
                        }).setText(
                          'Construction on the Washington Monument began in 1848.'
                        );
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-15 u-layout-cell-3">
              <div class="u-container-layout u-container-layout-7">
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-grey-10 u-group u-radius-27 u-shape-round u-group-2">
                  <div class="u-container-layout u-valign-middle u-container-layout-8">
                    <p class="u-align-center u-text u-text-11">Feed de Recados em desenvolvimento</p>
                  </div>
                </div>
                <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-grey-10 u-group u-radius-27 u-shape-round u-group-3">
                  <div class="u-container-layout u-valign-middle-xl u-container-layout-9">
                    <p class="u-align-center u-text u-text-12">Area de Mensagens</p>
                  </div>
                </div>
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