<?php
include("database.php");


session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] !== '') {
  $conexion_usabilidad = mysqli_connect("10.1.1.195", "App_matriz_tigo", "App_matriz_tigo9510*", "App_matriz_tigo_v1");
  mysqli_set_charset($conexion_usabilidad, "utf8");
  $insertQuery = "INSERT INTO `usabilidad_herramientas_movil` (`usuario`, `herramienta`) VALUES ('" . $_SESSION['user'] . "', 'Telepronter');";
  $result = mysqli_query($conexion_usabilidad, $insertQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Juan Mercado practicante de arquitectos-->
<!-- Juan Mercado el mejor practicante (cualquier problema con julian)-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telepronter</title>
  <link rel="stylesheet" href="css/bootstrapmateria.min.css">
  <meta charset="utf-8">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/estilipricipal.css">
  <link rel="stylesheet" href="./css/estiloiconos.css">
  <input id="user" value="<?= $_SESSION['user'] ?>" type="hidden" />

</head>
<header>
  <img src="./img/banner.png" alt="" style="background-repeat: no-repeat; background-position: center; width: 100%;">
</header>

<body>
  <!-- <br> -->
  <section class="pantalla pt-2 container">
    <h5 class="boton1">Motivo de <br> Retiro</h5>
    <form action="" class="buscardor ">
      <select class=" adentro" name="buscar" id="buscar" onchange="buscarCampo();">
        <option value="">Valor</option>
      </select>
    </form>

    <nav>
      <ul class="menu-horizontal">


        <li>
          <a href="https://wiktigo.emtelco.co/forma2/index.php?option=com_content&view=article&id=364:guia-comercial&catid=16&Itemid=101" target="_blank"><i class="bi bi-geo-alt"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://wiktigo.emtelco.co/forma2/index.php?option=com_content&view=article&id=364:guia-comercial&catid=16&Itemid=101" target="_blank">Guía Comercial</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/ag_cmp/" target="_blank"><i class="bi bi-currency-exchange"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/ag_cmp/" target="_blank">Comparador de ofertas</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/checklist_facturamovil/checklist.php" target="_blank"><i class="bi bi-clipboard2-check"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/checklist_facturamovil/checklist.php" target="_blank">Checklist de factura</a></li>
          </ul>
        </li>
        <li>
          <a href="https://biblioteca.emtelco.co/tigo/Conversor_de_particiones/" target="_blank"><i class="bi bi-sliders"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="https://biblioteca.emtelco.co/tigo/Conversor_de_particiones/" target="_blank">Multimedia de ajustes</a></li>
          </ul>
        </li>
        <li>
          <a href="http://contact.tigo.com.co/CRMPortal/auth/portal/default" target="_blank"><i class="bi bi-upc-scan"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="http://contact.tigo.com.co/CRMPortal/auth/portal/default" target="_blank">CRM</a></li>
          </ul>
        </li>
        <li>
          <a href="http://10.69.47.105:8081/Login.asp" target="_blank"><i class="bi bi-yelp"></i></a>
          <ul class="menu-vertical">
            <li class="letra"><a href="http://10.69.47.105:8081/Login.asp" target="_blank">CI</a></li>
          </ul>
        </li>


      </ul>
    </nav>
    <br>
    <br>
  </section>

  <section class="pantalla container">


    <div class="cont1  ">
      <h4 class="boton2">¿Qué le puedes preguntar al usuario?</h4> <!--  botnon2 -->
      <p class="pclass1">Recuerda realizar un sondeo con el usuario para darle un mejor manejo a la objeción manifestada </p>

      <div id="sondeo1" class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class="conten1 pclass " id="container"></p>
      </div>
      <div id="sondeo2" class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class="conten1 pclass " id="container2"></p>
      </div>
      <h4 class="boton2">¿Cómo puedo solucionarle al usuario?</h4> <!--  botnon2 -->
      <p class="pclass1">Si el usuario no acepta la reventa de beneficios, puedes solucionarle con las siguientes alternativas:
      </p>
      <div id="reventa">
        <div style="display: flex;">
          <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
          
          <div class="container-message">
            <p class=" conten3 pclass" id="container3"></p>
            <div id="container10" style="margin-bottom: 5px; text-align: center;"> </div>
          </div>
        </div>
      </div>
      <div id="spc2" class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class=" conten3 pclass" id="container5"></p>
        <div class="fija">

          <div id="url2">
            <p id="container11"></p>
          </div>

        </div>
      </div>
      <!-- <div class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class="conten1" ></p>
      </div> -->
    </div>




    <!-- lado izquierdo -->
    <div class="cont2 ">
      <h4 class="boton2">¿Cómo puedo manejar la objeción?</h4> <!--  botnon2 -->
      <p class="pclass1">Debes manejar la interacción según la intención de retiro, recuerda resaltar todos los beneficios de la oferta.</p>
      <div id="spc1" class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class=" conten2 pclass" id="container4"></p>
      </div>



      <h4 class="boton2">¿Cómo debemos tipificar la SPC?</h4> <!--  botnon2 -->
      <p class="pclass1">Recuerda que el proceso es exitoso utilizando la siguiente tipología: </p>
      <div style="margin: 5px 0 5px 0;">
        <div id="tipo">
          <span style="font-size: 16px; font-weight: 700;">Tipo:</span>
          <span id="container6" style="margin-left: 75px;"></span>
        </div>
        <div id="sub_tipo">
          <span style="font-size: 16px; font-weight: 700;">SubTipo:</span>
          <span id="container7"></span>
        </div>
        <div id="motivo">
          <span style="font-size: 16px; font-weight: 700;">Motivo:</span>
          <span id="container8" style="margin-left: 62px;"></span>
        </div>
      </div>
      <h4 class="boton2">Observación</h4> <!--  botnon2 -->
      <div id="observacion" class="pantalla">
        <i class="bi bi-check2-circle" style="font-size: 3rem; color: cornflowerblue; margin: auto 0;"></i>
        <p class=" conten2 pclass" id="container9"></p>
      </div>
    </div>
  </section>

  <iframe class="pantalla2" src="http://puntosdecontacto.une.com.co/forms/plantilla_ig/" title="Iframe Example"></iframe>
  <div><img class="arriba " src="./img/arriba.png" alt=""></div>
  <footer class="footer">
    <div class="footer-copyright text-center py-3">2023. Gestión del Aprendizaje - Emtelco</div>
  </footer>

  <script src="https://biblioteca.emtelco.co/e-learning/ingreso-emtelco/index.js"></script>

  <script>
    $(document).ready(function() {

      fetchTask();

      function fetchTask() {
        $.ajax({
          url: "buscar.php",
          type: "GET",
          success: function(response) {

            let template = "";
            const lists = JSON.parse(response);
            template += `<option></option>`
            lists.forEach((list) => {

              template += `
            <option value="${list.motivos}">${list.motivos}</option>
            `;
            });

            $("#buscar").html(template);
          },
        });
      }

      $('.arriba').click(function() {
        $('body, html').animate({
          scrollTop: '0px'
        }, 300);
      });

      $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
          $('.arriba').slideDown(300);
        } else {
          $('.arriba').slideUp(300);
        }
      });


    });

    function buscarCampo() {
      const prueba = document.getElementById("container");
      let Search = $("#buscar").val();
      $.ajax({
        url: "buscarCategoria.php",
        type: "POST",
        data: {
          Search
        },
        success: function(response) {
          let tamplate = "";
          let tamplate2 = "";
          let tamplate3 = "";
          let tamplate4 = "";
          let tamplate5 = "";
          let tamplate6 = "";
          let tamplate7 = "";
          let tamplate8 = "";
          let tamplate9 = "";
          let tamplate10 = "";
          let tamplate11 = "";

          let data = JSON.parse(response);

          data.forEach((data) => {
            tamplate += ` ${data.sondeo1 == "" ? $("#sondeo1").addClass("hide")  : $("#sondeo1").removeClass("hide"),  data.sondeo1} `;
            tamplate2 += ` ${data.sondeo2 == "" ? $("#sondeo2").addClass("hide")  : $("#sondeo2").removeClass("hide"),  data.sondeo2} `;
            tamplate3 += ` ${data.reventa == "" ? $("#reventa").addClass("hide")  : $("#reventa").removeClass("hide"),  data.reventa} `;
            tamplate4 += ` ${data.spc1 == "" ? $("#spc1").addClass("hide")  : $("#spc1").removeClass("hide"),  data.spc1} `;
            tamplate5 += ` ${data.spc2 == "" ? $("#spc2").addClass("hide")  : $("#spc2").removeClass("hide"),  data.spc2} `;
            tamplate6 += ` ${data.tipo == "" ? $("#tipo").addClass("hide")  : $("#tipo").removeClass("hide"),  data.tipo} `;
            tamplate7 += ` ${data.sub_tipo== "" ? $("#sub_tipo").addClass("hide")  : $("#sub_tipo").removeClass("hide"),  data.sub_tipo} `;
            tamplate8 += ` ${data.motivo == "" ? $("#motivo").addClass("hide")  : $("#motivo").removeClass("hide"),  data.motivo} `;
            tamplate9 += ` ${data.observacion == "" ? $("#observacion").addClass("hide")  : $("#observacion").removeClass("hide"),  data.observacion} `;
            tamplate10 += ` ${data.url1 == "" ? $("#url1").addClass("hide")  : $("#url1").removeClass("hide"),  data.url1} `;
            tamplate11 += ` ${data.url2 == "" ? $("#url2").addClass("hide")  : $("#url2").removeClass("hide"),  data.url2} `;



          });
          $("#container").html(tamplate);
          /*const variable = tamplate;
          if(variable === ""){
            alert("Vacio");
          }else{
            alert("Lleno");
            
          }*/
          // $("#container").val() == "" ? console.log("vacio") : console.log("lleno");
          //console.log($("#container").length);
          //const variable = document.getElementById("container").textContent;
          $("#container2").html(tamplate2);
          $("#container3").html(tamplate3);
          $("#container4").html(tamplate4);
          $("#container5").html(tamplate5);
          $("#container6").html(tamplate6);
          $("#container7").html(tamplate7);
          $("#container8").html(tamplate8);
          $("#container9").html(tamplate9);
          $("#container10").html('<a class="fija2 " href="' + tamplate10 + '" target="_blank">Más información</a>');
          $("#container11").html('<a class="fija2 " href="' + tamplate11 + '" target="_blank">Más información</a>');



          // $("#task-result").show();

        },
      });
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>