  <?php 

//origem (Facebook? Indicação (de quem)? Campanha?)
 $origem = $_GET['utm_source']; 

 //Processamento do email cadastrado no espaço "Receba Novidades"
$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$origemm = filter_input(INPUT_POST, $origem, FILTER_SANITIZE_STRING);

$result_aprov = "INSERT INTO leads (formulario, nome, email, telefone, mensagem, cidade, uf, origem) VALUES ('$nome', '$email' , '$telefone', '$mensagem', '$cidade', '$uf', '$origemm')";

$resultado_aprov = mysqli_query($conn, $result_aprov);
 
 ?>
 <!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Apr 20 2020 17:58:23 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e97696facd579cbe09abe6a" data-wf-site="5e8f2625b36f97b36db48840">
<head>
  <meta charset="utf-8">
  <title>LASS Máquinas</title>
  <meta content="Home Copy" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/lass-maquinas.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-164274199-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-164274199-1');
  </script>

  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
   <style> #movi{display: none;}
          #movshowdesk{display:none;}
          #consshowmob{display: none;}
          div#locarshowmobone {
            height: 320px; }

          @media (max-width: 600px) { #form-ask{ height: 380px !important; width: 90% !important;} }

          /* Bandeirinha BR para quando o site tiver tradução */  
         .image-6 {
            display: none !important; }

         .image-22 {
            display: none !important; }

          /* Bandeirinha USA para quando o site tiver tradução */ 
          img.image-usa {
            display: none !important; }

          .image-23 {
            display: none !important; }

          @media (min-width: 600px) { .assistform {display: none;} }
          
          @media screen and (max-width: 479px) {
            .brand-7 {
              width: 100% !important;
              padding: 19px 19px 19px 0px !important;}

          @media screen and (max-width: 479px) {

            .image-5 {
                  width: 120px !important;
                  height: auto !important;
                 margin-top: 0px !important;
                 position: static !important;
                 margin-left: auto !important;
                 margin-right: auto !important;}}

          @media screen and (max-width: 479px){
             .brand-7 {
                 width: 100% !important;
                 padding: 12px 19px 12px 0px !important;}}

          img.midias {
    width: 30px !important;
}


</style>

</head>
<body class="body">
  <div class="section">
    <div data-delay="2000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider w-slider">
      <div class="w-slider-mask">
        <div class="w-slide"><img src="images/LASS-movimentar-empresa-durante-crise-covid-19-funcionamento.jpg" alt="" class="image-18"></div>
        <div class="w-slide"><img src="images/low-alugar-empilhadeira-manitou-movimentacao.jpg" alt="" class="image-19"></div>
        <div class="w-slide"><img src="images/tudo-em-um-so-lugar-construction-movimentacao-pecas.jpg" alt="" class="image-20"></div>
        <div class="w-slide"><img src="images/low-comprar-miniescavadeiras-carregadeiras-geradores.jpg" alt="" class="image-21"></div>
        <div class="w-slide"><img src="images/pecas-originais-garante-eficiencia-para-o-seu-trabalho.jpg" srcset="images/pecas-originais-garante-eficiencia-para-o-seu-trabalho.jpg 500w, images/pecas-originais-garante-eficiencia-para-o-seu-trabalho.jpg 600w" sizes="100vw" alt="" class="image-21"></div>
      </div>
      <div class="left-arrow w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="right-arrow w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-round"></div>
    </div>
    <div data-delay="3000" data-animation="slide" data-autoplay="1" data-duration="500" data-infinite="1" class="slider-2 w-slider">
           <div class="mask w-slider-mask">
        <div class="w-slide"><img src="images/LASS-estamos-trabalhando-durante-coronavirus-covid-19.jpg" srcset="images/LASS-estamos-trabalhando-durante-coronavirus-covid-19.jpg 500w, images/LASS-estamos-trabalhando-durante-coronavirus-covid-19.jpg 1200w" sizes="100vw" alt="" class="image-14"></div>
        <div class="w-slide"><img src="images/low-locar-alugar-maquinas-para-meu-negocio.jpg" srcset="images/low-locar-alugar-maquinas-para-meu-negocio.jpg 500w, images/low-locar-alugar-maquinas-para-meu-negocio.jpg 1080w, images/low-locar-alugar-maquinas-para-meu-negocio.jpg 1200w" sizes="100vw" alt="" class="image-15"></div>
        <div class="w-slide"><img src="images/tudo-em-um-so-lugar-pecas-maquinas-lass-maquinas-tiete.jpg" srcset="images/tudo-em-um-so-lugar-pecas-maquinas-lass-maquinas-tiete-p-500.jpeg 500w, images/tudo-em-um-so-lugar-pecas-maquinas-lass-maquinas-tiete-p-800.jpeg 800w, images/tudo-em-um-so-lugar-pecas-maquinas-lass-maquinas-tiete-p-1080.jpeg 1080w, images/tudo-em-um-so-lugar-pecas-maquinas-lass-maquinas-tiete.jpg 1920w" sizes="100vw" alt="" class="image-16"></div>
        <div class="w-slide"><img src="images/low-miniescavadeiras-carregadeiras-geradores.jpg" srcset="images/low-miniescavadeiras-carregadeiras-geradores.jpg 500w, images/low-miniescavadeiras-carregadeiras-geradores.jpg 800w, images/low-miniescavadeiras-carregadeiras-geradores.jpg 1080w, images/low-miniescavadeiras-carregadeiras-geradores.jpg 1200w" sizes="100vw" alt="" class="image-17"></div>
        <div class="w-slide"><img src="images/original-pneus-camso-e-pecas-para-melhor-rendimento.jpg" srcset="images/original-pneus-camso-e-pecas-para-melhor-rendimento.jpg 500w, images/original-pneus-camso-e-pecas-para-melhor-rendimento.jpg 1080w, images/original-pneus-camso-e-pecas-para-melhor-rendimento.jpg 1200w" sizes="100vw" alt="" class="image-17"></div>
      </div>
      <div class="w-slider-arrow-left">
        <div class="icon-3 w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="icon-4 w-icon-slider-right"></div>
      </div>
      <div class="slide-nav w-slider-nav w-round"></div>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-copy w-nav">
      <div class="div-block"><a href="#" class="brand-7 w-nav-brand"><center><img src="images/lass-maquinas-aluguel-venda-e-pecas.png" alt="" class="image-5"></center></a>
        <div class="div-block-15"><img src="images/brasileiros.png" alt="" class="image-22"><img src="images/english-speakers.png" alt="" class="image-23"></div>
        <nav role="navigation" class="nav-menu w-nav-menu"><a href="#comprar-maquinas-na-lass" class="nav-link w-nav-link">Máquinas</a><a href="#locar-maquina" class="nav-link w-nav-link">Locação</a><a href="#comprar-peca" class="nav-link w-nav-link">Peças</a><a href="#comprar-pneu" class="nav-link w-nav-link">Pneus</a><a href="#assistencia-tecnica-lass" class="nav-link w-nav-link" onclick="assistenciadesk()">Assistência Técnica</a><a href="#entrar-em-contato" class="nav-link w-nav-link">Contato</a><a href="#pos-venda-lass" class="nav-li w-button" onclick="posvendadesk()">Pós-Venda</a><img src="images/brasileiros.png" alt="" class="image-6"><img src="images/english-speakers.png" alt="" class="image-usa"></nav>
      </div>
    </div>
  </div>
   <div class="section-2">
    <div class="div-block-2-copy-copy">
       <div class="w-row">
        <div class="column w-col w-col-6 w-col-tiny-6"><a href="#movi"><img id="" onclick="movimentacao()" src="images/movimentação.png" alt="" class="image-7"></a></div>
        <div class="column-2 w-col w-col-6 w-col-tiny-6"><a href="#pecas"><img src="images/Peças-maquinas.png" onclick="pecas()" alt="" class="image-7"></a></div>
      </div>
      <div class="w-row">
        <div class="column w-col w-col-6 w-col-tiny-6"><a href="#const"><img src="images/construction.png" onclick="construcao()" alt="" class="image-7"></a></div>
        <div class="column-2 w-col w-col-6 w-col-tiny-6"><a href="#pneus"><img src="images/Penusmaquinas.png" onclick="pneus()" alt="" class="image-7"></a></div>
      </div>
      <div class="w-row">
        <div class="column w-col w-col-6 w-col-tiny-6"><a href="#plataformas"><img src="images/Plataformas.png" alt="" onclick="plata()" class="image-7"></a></div>
        <div class="column-2 w-col w-col-6 w-col-tiny-6"><a href="#geradores"><img src="images/gerador.png" alt="" onclick="gera()" class="image-7"></a></div>
      </div>
      <div class="div-block-4"><a href="#locacao"><img src="images/locação-de-maquinas.png" onclick="locar()" alt="" class="image-7-bluebg"></a></div>
    </div>
  </div>
<div class="div-block-2"><a href="#movi"><img onclick="movimentacao()" id="empi" src="images/movimentação.png" alt="Melhores marcas para a industria adquira ja maquina para fabrica" class="image-7"></a><a href="#const"><img onclick="construcao()" src="images/construction.png" alt="adquira ja maquinas para construcao com a LASS Maquinas onde conseguir maquinario para construcao" class="image-7"></a><a href="#pecas"><img onclick="pecas()" src="images/Peças-maquinas.png" alt="Compre peças aqui mesmo, contamos com o melhor atendimento da regiao de Tiete" class="image-7"></a><a href="#pneus"><img onclick="pneus()" src="images/Penusmaquinas.png" alt="Compre Pneus Camso em Tietê, Sorocaba e região, Cerquilho, Piracicaba, Camso no interior de São Paulo" class="image-7"></a><a href="#plataformas"><img onclick="plata()" src="images/Plataformas.png" alt="plataformas para industria e demais negocios é aqui emesmo, fabricas no interior de sao paulo, fabricas em Cerquilho, Tietê e regiao" class="image-7"></a><a href="#geradores"><img onclick="gera()" src="images/gerador.png" alt="Gerador da Atlas Copco no interior de São Paulo" class="image-7"></a><a href="#locacao"><img onclick="locar()" src="images/locação-de-maquinas.png" alt="Alugar maquinas para construção, industria e movimentação no interior de São Paulo Tietê, Cerquilho, Sorocaba, Piracicaba e Região Locaçao de maquinas" class="image-7-bluebg"></a></div>
  <div class="div-block-2-copy"><img src="images/movimentação.png" alt="" class="image-7"><img src="images/construction.png" alt="" class="image-7"><img src="images/Peças-maquinas.png" alt="" class="image-7"><img src="images/Penusmaquinas.png" alt="" class="image-7">
    <div class="div-block-4"><img src="images/Plataformas.png" alt="" class="image-7"><img src="images/gerador.png" alt="" class="image-7"><img src="images/locação-de-maquinas.png" alt="" class="image-7-bluebg"></div>
  </div>
  <div id="teste"></div>
 <div class="mov" id="movi">
    <h1 class="heading-copyyy">Movimentação</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/maquinas-yanmar-movimentacao-industrias.png" alt="maquinas empilhadeiras dentre outros para movimentação comprar para industrias" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "maquinademovimentacao" ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
  </div>
  <div class="construction" style="display: none;" id="const">
    <h1 class="heading-copyyy">Construção</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/linha-construcao-construction-maquinas.png" alt="comprar ou alugar maquinas para construção yanmar" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "maquinadeconstrucao"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="parts" style="display: none;" id="pecas">
    <h1 class="heading-copyyy">Peças</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/comprar-pecas-para-maquinas.png" alt="comprar peças para maquinas yanmar XCMG Paletrans" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "pecas"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="pneus" style="display: none;" id="pneus">
    <h1 class="heading-copyyy">Pneus</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/onde-comprar-pneus-camso-road-free.png" alt="pneus Camso Road Free Michellin" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "pneus"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="plataformas" style="display: none;" id="plataformas">
    <h1 class="heading-copyyy">Plataformas</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/comprar-ou-alugar-plataforma-skyjack-sjih-3219.png" alt="comprar ou alugar plataformas Sky Jack dentre outros" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "plataformas"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="geradores" style="display: none;" id="geradores">
    <h1 class="heading-copyyy">Geradores</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/geradores-gerador-atlas-copco.png" alt="comprar geradores Atlas Copco " class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "geradores"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="locacao" style="display: none;" id="locacao">
    <h1 class="heading-copyyy">Locação de máquinas</h1>
    <div class="w-row">
      <div class="w-col w-col-6"><img src="images/alugar-maquinas-industriais-construcao-movimentacao.png" alt="Alugar maquinário industrial construção. Alugar máquinas Locação Locacao de maquina Locar" class="image-24"></div>
      <div class="w-col w-col-6">
        <h1 class="heading-copyyy-copy" style="margin-bottom: 0px;">Solicite contato comercial</h1><a href="#" onclick="fechar()" style="text-decoration: none;"><h1 class="fechar-2" style="margin-bottom: 30px;">fechar</h1></a>
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 75%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/locacao.php?utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
      </div>
    </div>
  </div>
  <div class="section-3" name="solicitar-contato-comercial">
    <h1 class="heading"><span style="background-color: #ffc61f;">Grandes experiências</span> constroem grandes <span style="background-color: #ffc61f;">relacionamentos</span>.</h1>
  </div>
  <div class="section-4-copy">
    <div class="movimentacao-solicite">
      <div class="div-block-6-copyyyy">
        <h1 class="heading-2-copyyy">Solicite contato</h1>
        <h1 class="fechar">voltar</h1>
        <div class="html-embed-2 w-embed">form movimentacao</div>
      </div>
    </div>
  </div>
  <div class="section-4" id="comprar-maquinas-na-lass">
  <div class="div-block-9-copy"><img src="images/aluguel-de-maquinas-construcao-mobile.jpg" srcset="images/aluguel-de-maquinas-construcao-mobile-p-500.jpeg 500w, images/aluguel-de-maquinas-construcao-mobile-p-800.jpeg 800w, images/aluguel-de-maquinas-construcao-mobile.jpg 846w" sizes="(max-width: 479px) 90vw, 100vw" alt="">
      <div class="div-block-7-copy" id="conshidemob" style="display: block;">
        <div class="div-block-8">
          <h1 class="heading-2">Linha Construção</h1>
          <p class="paragraph">Desde pequenas até grandes empresas a LASS Máquinas tem a solução ideal como Miniescavadeiras, Carregadeiras, Transformadores, entre outros.</p>
          <div class="columns w-row">
            <div class="column-3 w-col w-col-9 w-col-small-9 w-col-tiny-9"><a href="#" onclick="construcao_solicitemob()"class="button-2-copy-copy w-button">Conheça nossas Máquinas</a></div>
            <div class="column-8 w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="https://api.whatsapp.com/send?phone=5515991550922&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20linha%20de%20m%C3%A1quinas%20de%20constru%C3%A7%C3%A3o"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9"></a></div>
          </div>
        </div>
      </div>
      <div class="construction-solicite-mobile" id="consshowmob" style="height: 400px; display: none;">
        <div class="div-block-8">
          <h1 class="heading-2-copyyy">Solicite contato</h1>
          <a href="#" style="text-decoration: none;" onclick="voltar_cons()"><h1 class="fechar">voltar</h1></a>
          <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; overflow:hidden; width: 102%;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "maquina de construcao"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
        </div>
      </div>
    </div>
    <div class="div-block-9-copy"><img src="images/aluguel-de-maquinas-plataforma-empilhadeiras.jpg" srcset="images/aluguel-de-maquinas-plataforma-empilhadeiras-p-500.jpeg 500w, images/aluguel-de-maquinas-plataforma-empilhadeiras-p-800.jpeg 800w, images/aluguel-de-maquinas-plataforma-empilhadeiras.jpg 846w" sizes="(max-width: 479px) 90vw, 100vw" alt="">
      <div class="div-block-7-copy-copy" id="indhidemob" style="display: block;">
        <div class="div-block-8">
          <h1 class="heading-2">Linha Industrial</h1>
          <p class="paragraph">A linha industrial da LASS Máquinas conta com Empilhadeiras, paleteiras e plataformas elevatórias e outras infinitas possibilidades.</p>
          <div class="columns w-row">
            <div class="column-3 w-col w-col-9 w-col-small-9 w-col-tiny-9"><a href="#" onclick="industrial_solicitemob()" class="button-2-copy w-button">Solicite um Orçamento</a></div>
            <div class="column-6 w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="https://api.whatsapp.com/send?phone=5515991550922&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20linha%20de%20m%C3%A1quinas%20de%20constru%C3%A7%C3%A3o"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9"></a></div>
          </div>
        </div>
      </div>
      <div class="industrial-solicite-mobile" id="indshowmob" style="height: 400px; display: none;">
        <div class="div-block-8">
          <h1 class="heading-2-copyyy">Solicite um Orçamento</h1>
          <a href="#" style="text-decoration: none;" onclick="voltar_ind()"><h1 class="fechar">voltar</h1></a>
          <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; overflow:hidden; width: 102%;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquinayellow.php?maquina=<?php echo "maquina de industrial"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
        </div>
      </div>
    </div>
    <div class="div-block-5-copy" id="conshidedesk">
      <div class="div-block-6-copy">
        <h1 class="heading-2">Linha Construção</h1>
        <p class="paragraph">Desde pequenas até grandes empresas a LASS Máquinas tem a solução ideal como Miniescavadeiras, Carregadeiras, Transformadores, entre outros.</p>
        <div class="columns w-row">
          <div class="column-3 w-col w-col-9 w-col-small-9"><a href="#" onclick="construcao_solicite()" class="button-2-copy-copy w-button">Conheça nossas Máquinas</a></div>
          <div class="w-col w-col-3 w-col-small-3"><a href="https://api.whatsapp.com/send?phone=5515991550922&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20linha%20de%20m%C3%A1quinas%20de%20constru%C3%A7%C3%A3o"target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="comprar ou alugar maquinas para industria ou construcao melhor atendimento via whatsapp Preciso de maquinas para construcao onde conseguir" class="image-9"></a></div>
        </div>
      </div>
    </div>
    <div class="construction-solicite" id="consshowdesk">
      <div class="div-block-6-copy-copy">
        <h1 class="heading-2-copyyy">Solicite contato</h1>
        <a href="#" onclick="voltar_cons()" style="text-decoration: none;"><h1 class="fechar">voltar</h1></a>
        <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden; width: 95%;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquina.php?maquina=<?php echo "maquina de construcao"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
  </div>
  <div class="section-4">
    <div class="div-block-5" id="indhidedesk">
      <div class="div-block-6">
        <h1 class="heading-2">Linha Industrial</h1>
        <p class="paragraph">A linha industrial da LASS Máquinas conta com Empilhadeiras, paleteiras e plataformas elevatórias e outras infinitas possibilidades.</p>
        <div class="columns w-row">
          <div class="column-3 w-col w-col-9 w-col-small-9"><a href="#" onclick="industrial_solicite()" class="button-2 w-button">Solicite um Orçamento</a></div>
          <div class="w-col w-col-3 w-col-small-3"><a href="https://api.whatsapp.com/send?phone=5515991550922&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20linha%20industrial" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="alugue ja ou compre tudo para a sua industria. Onde comprar maquinas para industria Onde alugar maquinas para industria Maquinas industriais" class="image-9"></a></div>
        </div>
      </div>
    </div>
    <div class="industrial-solicite" id="indshowdesk">
      <div class="div-block-6-copyyyy">
        <h1 class="heading-2-copyyy">Solicite um Orçamento</h1>
        <a href="#" onclick="voltar_ind()" style="text-decoration: none;"><h1 class="fechar">voltar</h1></a>
        <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden; width: 95%;" frameborder="0" src="http://www.epicacreative.com.br/lass/maquinayellow.php?maquina=<?php echo "maquina de industrial"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
  </div>
  <div class="section-5"></div>
  <div class="section-6" id="locar">
    <div class="div-block-10"><img src="images/empilhadeira-da-yanmar-para-alugar.png" srcset="images/empilhadeira-da-yanmar-para-alugar-p-500.png 500w, images/empilhadeira-da-yanmar-para-alugar-p-800.png 800w, images/empilhadeira-da-yanmar-para-alugar.png 846w" sizes="(max-width: 479px) 90vw, 100vw" alt="">
      <p class="paragraph-3" id="locarhidemobone">Locação é um serviço consideravelmente mais barato e rápido. Que garante o uso de máquinas de qualidade, pelo tempo necessário. Vale ressaltar que nossa equipe está 100% disponível para auxiliar na escolha e no treinamento da sua equipe.</p>
      <div class="columns-copy-copy w-row" id="locarhidemobtwo">
        <div class="column-3 w-col w-col-9 w-col-small-9 w-col-tiny-9"><a href="#" onclick="locacaomob()" class="button-2-copyy w-button">Solicitar Orçamento</a></div>
        <div class="column-5-copy-copy w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="https://api.whatsapp.com/send?phone=5515991061195&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20locacao%20de%20maquinas" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9-copy-copy"></a></div>
      </div>
      <div class="loca-solicite-mobile" id="locarshowmobone" style="display:none; width: 90%">
        <h1 class="heading-2-copyyy-copy">Solicite contato</h1>
        <a href="#" onclick="voltar_locacaomob()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
        <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 420px; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/locacao.php?utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
    <div class="columns-2 w-row" id="locar-maquina">
      <div class="column-4-copy-copy w-col w-col-6 w-col-small-6" id="colunaloca">
        <p class="paragraph-2" id="locacaohidedesk">Locação é um serviço consideravelmente mais barato e rápido. Que garante o uso de máquinas de qualidade, pelo tempo necessário. Vale ressaltar que nossa equipe está 100% disponível para auxiliar na escolha e no treinamento da sua equipe.</p>
        <div class="columns-copy w-row" id="doublecolumnlocacaohidedesk">
          <div class="column-3 w-col w-col-9 w-col-small-9"><a href="#" onclick="locacao()" class="button-2-copyy w-button">Solicitar Orçamento</a></div>
          <div class="column-5-copy w-col w-col-3 w-col-small-3"><a href="https://api.whatsapp.com/send?phone=5515991061195&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20a%20locacao%20de%20maquinas" alt="" class="image-9-copy"></a></div>
        </div>
        <div class="locar-solicite" id="locar_solicite">
          <h1 class="heading-2-copyyy-copy">Solicite contato</h1>
          <a href="#" onclick="voltar_locacao()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
          <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden; width: 95%;" frameborder="0" src="http://www.epicacreative.com.br/lass/locacao.php?utm_source=<? echo $origem; ?>"></iframe></div>
        </div>
      </div>
      <div class="w-col w-col-6 w-col-small-6"></div>
    </div>
  </div>
  <div class="section-6-copy-copy" id="comprar-pecas">
    <div class="div-block-10"><img src="images/compre-peças-de-maquinarios.jpg" srcset="images/compre-peças-de-maquinarios-p-500.jpeg 500w, images/compre-peças-de-maquinarios-p-800.jpeg 800w, images/compre-peças-de-maquinarios.jpg 846w" sizes="(max-width: 479px) 90vw, 100vw" alt="">
      <p class="paragraph-3" id="pecashidemobone">Garanta a vida útil! Nosso setor de peças conta com uma extensa gama de produtos originais como peças de reposição. A qualidade e a durabilidade são indiscutíveis, atendendo a real necessidade de seus equipamentos, máquinas e empilhadeiras.</p>
      <div class="columns-copy-copy w-row" id="pecashidemobtwo">
        <div class="column-3 w-col w-col-9 w-col-small-9 w-col-tiny-9"><a href="#" onclick="pecasmob()" class="button-2-copyy w-button">Solicite Orçamento</a></div>
        <div class="column-5-copy-copy w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="https://api.whatsapp.com/send?phone=5515991162324&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9-copy-copy"></a></div>
      </div>
      <div class="pecas-solicite-mobile" id="pecasshowmob" style="display: none; height: 320px; width: 90%">
        <h1 class="heading-2-copyyy-copy">Solicite Orçamento</h1>
        <a href="#" onclick="voltar_pecasmob()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
        <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/compras.php?maquina=<?php echo "pecas"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
    <div class="columns-2 w-row" id="comprar-peca">
      <div class="column-4-copy w-col w-col-6 w-col-small-6"></div>
      <div class="column-9 w-col w-col-6 w-col-small-6">
        <p class="paragraph-2" id="pecashidedeskone">Garanta a vida útil! Nosso setor de peças conta com uma extensa gama de produtos originais como peças de reposição. A qualidade e a durabilidade são indiscutíveis, atendendo a real necessidade de seus equipamentos, máquinas e empilhadeiras.</p>
        <div class="columns-copy w-row" id="pecashidedesktwo">
          <div class="column-3 w-col w-col-9 w-col-small-9"><a href="#" onclick="pecasdesk()" class="button-2-copyy w-button">Solicite Orçamento</a></div>
          <div class="column-5-copy w-col w-col-3 w-col-small-3"><a href="https://api.whatsapp.com/send?phone=5515991162324&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9-copy"></a></div>
        </div>
        <div class="pecas-solicite" id="pecasshowdesk">
          <h1 class="heading-2-copyyy-copy">Solicite Orçamento</h1>
          <a href="#" onclick="voltar_pecasdesk()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
          <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/compras.php?maquina=<?php echo "pecas"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-6-copy">
    <div class="div-block-10"><img src="images/pneus-da-camso-para-comprar.jpg" srcset="images/pneus-da-camso-para-comprar-p-500.jpeg 500w, images/pneus-da-camso-para-comprar-p-800.jpeg 800w, images/pneus-da-camso-para-comprar.jpg 846w" sizes="(max-width: 479px) 90vw, 100vw" alt="">
      <p class="paragraph-3" id="pneushidemobone">Utilize pneus que te sustentam com performance e trazem segurança para as operações. Suas máquinas e equipamentos precisam de performance e qualidade na execução do dia-a-dia.</p>
      <div class="columns-copy-copy w-row" id="pneushidemobtwo">
        <div class="column-3 w-col w-col-9 w-col-small-9 w-col-tiny-9"><a href="#" onclick="pneusmob()" class="button-2-copyy w-button">Consulte nossa Equipe</a></div>
        <div class="column-5-copy-copy w-col w-col-3 w-col-small-3 w-col-tiny-3"><a href="https://api.whatsapp.com/send?phone=5515991162324&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20os%20pneus%20Camso" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9-copy-copy"></a></div>
      </div><img src="images/camso-trelleborg.png" alt="" id="pneushidemobthree" class="image-13">
      <div class="pneus-solicite-mobile" id="pneusshowmob" style="display: none; height: 380px; width: 90%">
        <h1 class="heading-2-copyyy-copy">Solicite contato</h1>
        <a href="#" onclick="voltar_pneusmob()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
        <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/compras.php?maquina=<?php echo "pneus"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
    </div>
    <div class="columns-2 w-row" id="comprar-pneu">
      <div class="column-4-copy w-col w-col-6 w-col-small-6">
        <p class="paragraph-2" id="pneushidedeskone">Utilize pneus que te sustentam com performance e trazem segurança para as operações. Suas máquinas e equipamentos precisam de performance e qualidade na execução do dia-a-dia.</p>
        <div class="columns-copy w-row" id="pneushidedesktwo">
          <div class="column-3 w-col w-col-9 w-col-small-9"><a href="#" onclick="pneusdesk()" class="button-2-copyy w-button">Consulte nossa Equipe</a><img src="images/camso-trelleborg.png" alt="" class="image-12"></div>
          <div class="column-5-copy w-col w-col-3 w-col-small-3"><a href="https://api.whatsapp.com/send?phone=5515991162324&text=Ol%C3%A1%20LASS%2C%20estou%20interessado%20em%20saber%20mais%20sobre%20os%20pneus%20Camso" target="_blank"><img src="images/whatsapp-alugar-maquinas.png" alt="" class="image-9-copy"></a></div>
        </div>
        <div class="pneus-solicite" id="pneusshowdesk" style="display: none;">
          <h1 class="heading-2-copyyy-copy">Solicite contato</h1>
          <a href="#" onclick="voltar_pneusdesk()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a>
          <div class="html-embed-2 w-embed"><iframe scrolling="no" style="height: 380px; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/compras.php?maquina=<?php echo "pneus"; ?>&utm_source=<? echo $origem; ?>"></iframe></div>
      </div>
        </div>
      </div>
  </div>
 <div class="section-7"></div>
  <div class="section-8">
    <div class="w-row">
      <div class="column-10 w-col w-col-6" id="assistencia-tecnica-lass">
        <a href="#" onclick="assistenciadesk()"><div class="div-block-11">
          <div class="div-block-13" id="esconde">
            <h1 class="heading-3">Assistência Técnica</h1>
            <p class="paragraph-4">A LASS Máquinas conta com uma equipe de profissionais preparados para oferecer o melhor atendimento e providenciar as soluções para os nossos clientes.</p>
          </div>
        </div></a><div class="assistform" id="formulario-assistencia"><div id="escondeassist" style="display: none;"><br><h1 class="heading-2-copyyy-copy">Solicite contato</h1>
          <a href="#" onclick="voltar_assistenciadesk()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/assistencia-pos.php?maquina=<?php echo "AssistenciaTecnica"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div></div>
      </div>
      <div class="column-11 w-col w-col-6" id="pos-venda-lass">
        <a href="#" onclick="posvendadesk()"><div class="div-block-12">
          <div class="div-block-13-copy" style="height: 120px !important;" id="escondepv">
            <h1 class="heading-3">Conheça o nosso Pós-Venda!</h1>
            <p class="paragraph-4">Uma equipe de colaboradores qualificados prontos para te atender com excelência.</p>
          </div>
        </div></a><div class="assistform" id="formulario-pv"><div id="escondepvm" style="display: none;"><br><h1 class="heading-2-copyyy-copy">Solicite contato</h1>
          <a href="#" onclick="voltar_posvendadesk()" style="text-decoration: none;"><h1 class="fechar-2">voltar</h1></a><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/assistencia-pos.php?maquina=<?php echo "PosVenda"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div></div>
      </div>
    </div>
    <div class="columns-4 w-row">
      <div class="w-col w-col-6">
        <div id="assistshowdesk" style="display: none;">
          <h1 class="heading-copyyy-copy-copy-copy">Solicite Assistência Técnica</h1>
          <a href="#" onclick="voltar_assistenciadesk()" style="text-decoration: none;"><h1 class="fechar-2">fechar</h1></a>
          <div class="html-embed-contact-form-copy w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/assistencia-pos.php?maquina=<?php echo "AssistenciaTecnica"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
        </div>
      </div>
      <div class="w-col w-col-6">
        <div id="pvshowdesk" style="display: none;">
          <h1 class="heading-copyyy-copy-copy">Solicite contato do Pós-Venda</h1>
          <a href="#" onclick="voltar_posvendadesk()" style="text-decoration: none;"><h1 class="fechar-2">fechar</h1></a>
          <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 80%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/assistencia-pos.php?maquina=<?php echo "PosVenda"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-7"><a href="#" onclick="orce()" style="padding-top: 25px; padding-bottom:25px; font-size: 20px" class="button-2-big w-button">Faça seu orçamento sem compromisso<br><b>Clique Aqui<b></a></div>
  <div style="background-color: white; display: none;" id="facaorcamento"><div style="width: 330px; margin-left: auto; margin-right: auto;"><center><span style="font-family: 'Open Sans', sans-serif; background-color: #08528b; color: white; font-weight: 600; padding-left: 15px; padding-right: 15px; padding-top: 5px; padding-bottom: 5px; line-height: 28px; font-size: 28px;">Faça seu orçamento</span></center><br><a href="#" onclick="voltar_orce()" style="text-decoration: none;"><h1 class="fechar-2">fechar</h1></a><br><iframe scrolling="no" style="height: 50vh; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/orcamento.php?maquina=<?php echo "orcamento"; ?>&utm_source=<? echo $origem; ?>" id="form-ask"></iframe></div></div>
  <div class="section-9" id="entrar-em-contato">
    <div class="w-row">
      <div class="column-12 w-col w-col-6">
        <div class="html-embed w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.6432623065803!2d-47.720923649221966!3d-23.00014208489062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c61450bf72368b%3A0xe7b77e596e66b6dd!2sLASS%20M%C3%A1quinas!5e0!3m2!1spt-BR!2sbr!4v1586892179845!5m2!1spt-BR!2sbr" width="100%" frameborder="0" style="border:0; height:50vh;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
      <div class="column-13 w-col w-col-6">
        <div class="html-embed-contact-form w-embed"><iframe scrolling="no" style="height: 50vh; width: 100%; overflow:hidden;" frameborder="0" src="http://www.epicacreative.com.br/lass/contato.php?utm_source=<? echo $origem; ?>"></iframe></div>
        <div class="html-embed-copy w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.6432623065803!2d-47.720923649221966!3d-23.00014208489062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c61450bf72368b%3A0xe7b77e596e66b6dd!2sLASS%20M%C3%A1quinas!5e0!3m2!1spt-BR!2sbr!4v1586892179845!5m2!1spt-BR!2sbr" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
      </div>
    </div>
  </div>
  <div class="section-10">
    <h1 class="heading-4">Cadastre-se e receba novidades</h1>
    <div class="div-block-14"></div>
    <div class="form-block w-form" id="newsletterform">
      <form id="email-form" name="email-form" data-name="Email Form" target="contato" onsubmit="return showsuccessmsg()" method="POST" class="form" action="processa-dados.php"><input type="text" class="text-field w-input" maxlength="256" name="mail" data-name="e-mail" placeholder="Digite seu e-mail..." id="e-mail"><input type="submit" onclick="showsuccessmsg()" value="Cadastrar" data-wait="aguarde..." class="submit-button w-button"></form>
      <iframe style="display:none;" name="contato" src="contato.php"></iframe>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
    <div id="successmsg" style="margin-bottom: 30px; display: none;"><center><span style=" font-family: open-sans, Arial; font-size: 18pt; font-weight: 700; color: white;">Email cadastrado com sucesso!</span></center></div>
  </div>
  <div class="section-11">
    <div class="w-row">
      <div class="column-14 w-col w-col-3"><img src="images/lass-maquinas-peças-aluguel-industrial-etc.png" alt="" class="image-10"></div>
      <div class="column-15 w-col w-col-3">
        <div>
          <h1 class="heading-4-copy">Setores</h1>
          <a href="#comprar-maquinas-na-lass" style="text-decoration: none;"><p class="paragraph-5">Vendas</p></a>
          <a href="#comprar-pecas" style="text-decoration: none;"><p class="paragraph-5">Peças</p></a>
          <a href="#locar" onclick="locacao()" style="text-decoration: none;"><p class="paragraph-5">Locação de Máquinas </p></a>
          <p class="paragraph-5"><a href="#assistencia-tecnica-lass" style="text-decoration: none; color:white;" onclick="assistenciadesk()">Assistência Técnica</a></p>
        </div>
      </div>
      <div class="column-16 w-col w-col-3">
        <div>
          <h1 class="heading-4-copy">Contato</h1>
          <p class="paragraph-5">Rua Luís Florian, 51 - Distrito<br>Industrial - Rod. Cornélio Pires (SP<br>-127) - Km 69 Tietê / SP</p>
          <p class="paragraph-5">(15) 3389-1010 |  (15) 3282-5109</p>
          <p class="paragraph-5">contato@lass.com.br</p>
        </div>
      </div>
      <div class="w-col w-col-3">
        <div>
          <h1 class="heading-4-copy">Mídias</h1>
        </div><a target="_blank" href="https://www.instagram.com/lassmaquinas/" ><img src="images/maquinas-empilhadeiras-industriais-construcao-movimentacao.png" width="16" alt="" class="image-11" style="width: 30px;"></a><a href="https://www.facebook.com/lassmaquinas/"  target="_blank"><img src="images/aluguel-de-maquinas-compras-de-pecas.png" width="16" alt="" style="width: 30px; margin-left: 5px;"></div>
    </div>
  </div>
  <div class="section-12">
    <a href="https://www.epicacreative.com.br/" style="text-decoration: none;"><p class="paragraph-6">Desenvolvido por Épica Creative</p></a>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e8f2625b36f97b36db48840" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script>
 
//Funções dos ícones superiores

function movimentacao() {
  document.getElementById("movi").style.display = "block";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none";

}

function fechar() { 
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none"; }



function construcao() {
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "block";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none";
}

function pecas() {
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "block";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none";
}

function pneus() {
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "block";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none";
}

function plata() {
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "block";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "none";
}

function gera() {
  document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "block";
  document.getElementById("locacao").style.display = "none";
}

function locar() {
    document.getElementById("movi").style.display = "none";
  document.getElementById("const").style.display = "none";
  document.getElementById("pecas").style.display = "none";
  document.getElementById("pneus").style.display = "none";
  document.getElementById("plataformas").style.display = "none";
  document.getElementById("geradores").style.display = "none";
  document.getElementById("locacao").style.display = "block";
}

//Linha Movimentação

function movimentacao_solicite() { 
document.getElementById("movhidedesk").style.display = "none";
document.getElementById("movshowdesk").style.display = "block";
document.getElementById("movhidemob").style.display = "none";
document.getElementById("movshowmob").style.display = "block";
 }

function voltar_movi() { 
document.getElementById("movhidedesk").style.display = "block";
document.getElementById("movshowdesk").style.display = "none";
document.getElementById("movhidemob").style.display = "block";
document.getElementById("movshowmob").style.display = "none"; }

//Linha Construção

function construcao_solicite() { 
document.getElementById("conshidemob").style.display = "none";
document.getElementById("consshowmob").style.display = "block";
document.getElementById("conshidedesk").style.display = "none";
document.getElementById("consshowdesk").style.display = "block";
 }

 function construcao_solicitemob() { 
document.getElementById("conshidemob").style.display = "none";
document.getElementById("consshowmob").style.display = "block";
 }

function voltar_cons() { 
document.getElementById("conshidemob").style.display = "block";
document.getElementById("consshowmob").style.display = "none";
document.getElementById("conshidedesk").style.display = "block";
document.getElementById("consshowdesk").style.display = "none"; }

//Linha Industrial

function industrial_solicite() { 

document.getElementById("indhidedesk").style.display = "none";
document.getElementById("indshowdesk").style.display = "block";
 }

 function industrial_solicitemob() { 
document.getElementById("indhidemob").style.display = "none";
document.getElementById("indshowmob").style.display = "block";
 }

function voltar_ind() { 
document.getElementById("indhidemob").style.display = "block";
document.getElementById("indshowmob").style.display = "none";
document.getElementById("indhidedesk").style.display = "block";
document.getElementById("indshowdesk").style.display = "none";  }

//Serviço de locação

function locacao() { 
document.getElementById("locacaohidedesk").style.display = "none";
document.getElementById("doublecolumnlocacaohidedesk").style.display = "none";  
document.getElementById("locar_solicite").style.display = "block";
document.getElementById("colunaloca").style.paddingTop = "0px";
  }

function voltar_locacao() { 
document.getElementById("locacaohidedesk").style.display = "block";
document.getElementById("doublecolumnlocacaohidedesk").style.display = "block";   
document.getElementById("locar_solicite").style.display = "none"; 
  }

function locacaomob() { 
document.getElementById("locarhidemobone").style.display = "none";
document.getElementById("locarhidemobtwo").style.display = "none";  
document.getElementById("locarshowmobone").style.display = "block";   
 }

function voltar_locacaomob() { 
document.getElementById("locarhidemobone").style.display = "block";
document.getElementById("locarhidemobtwo").style.display = "block";   
document.getElementById("locarshowmobone").style.display = "none";  }

//Serviço de Peças

function pecasmob() {
document.getElementById("pecashidemobone").style.display = "none";
document.getElementById("pecashidemobtwo").style.display = "none";  
document.getElementById("pecasshowmob").style.display = "block"; 
}

function voltar_pecasmob() {
document.getElementById("pecashidemobone").style.display = "block";
document.getElementById("pecashidemobtwo").style.display = "block";   
document.getElementById("pecasshowmob").style.display = "none"; 
}

function pecasdesk() {
document.getElementById("pecashidedeskone").style.display = "none";
document.getElementById("pecashidedesktwo").style.display = "none";
document.getElementById("pecasshowdesk").style.display = "block";
}

function voltar_pecasdesk() {
document.getElementById("pecashidedeskone").style.display = "block";
document.getElementById("pecashidedesktwo").style.display = "block";
document.getElementById("pecasshowdesk").style.display = "none";
}

//Serviço Pneus

function pneusmob() {
document.getElementById("pneushidemobone").style.display = "none";
document.getElementById("pneushidemobtwo").style.display = "none";
document.getElementById("pneushidemobthree").style.display = "none";
document.getElementById("pneusshowmob").style.display = "block";
}

function voltar_pneusmob() {
document.getElementById("pneushidemobone").style.display = "block";
document.getElementById("pneushidemobtwo").style.display = "block";
document.getElementById("pneushidemobthree").style.display = "block";
document.getElementById("pneusshowmob").style.display = "none";
}

function pneusdesk() { 
document.getElementById("pneushidedeskone").style.display = "none";
document.getElementById("pneushidedesktwo").style.display = "none";
document.getElementById("pneusshowdesk").style.display = "block";
 }

 function voltar_pneusdesk() { 
document.getElementById("pneushidedeskone").style.display = "block";
document.getElementById("pneushidedesktwo").style.display = "block";
document.getElementById("pneusshowdesk").style.display = "none";
 }

function orce() { document.getElementById("facaorcamento").style.display = "block"; }

function voltar_orce() { document.getElementById("facaorcamento").style.display = "none"; }

// Assistência Técnica

function assistenciadesk() { 
document.getElementById("assistshowdesk").style.display = "block";
document.getElementById("pvshowdesk").style.display = "none";
document.getElementById("esconde").style.display = "none";
document.getElementById("escondepv").style.display = "block";
document.getElementById("escondeassist").style.display = "block";
document.getElementById("escondepv").style.display = "block";
document.getElementById("escondepvm").style.display = "none";
 }

function voltar_assistenciadesk() {
document.getElementById("assistshowdesk").style.display = "none";
document.getElementById("escondeassist").style.display = "none";
document.getElementById("esconde").style.display = "block";

 }

 //Pós Venda

function posvendadesk() { 
document.getElementById("pvshowdesk").style.display = "block";
document.getElementById("assistshowdesk").style.display = "none";
document.getElementById("esconde").style.display = "block";
document.getElementById("escondeassist").style.display = "none";
document.getElementById("escondepv").style.display = "none";
document.getElementById("escondepvm").style.display = "block";

 }

function voltar_posvendadesk() { 
document.getElementById("pvshowdesk").style.display = "none";
document.getElementById("escondepvm").style.display = "none";
document.getElementById("escondepv").style.display = "block";



 }

 function showsuccessmsg() { 
document.getElementById("successmsg").style.display = "block";
document.getElementById("newsletterform").style.display = "none";

 }


</script>
<div style="display: none;">

</div>
</body>
</html>
