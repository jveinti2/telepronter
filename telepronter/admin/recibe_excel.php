<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>

    <?php
  header('Content-Type: text/html; charset=UTF-8');
  require('./conexion.php');
  $tipo       = $_FILES['dataCliente']['type'];
  $tamanio    = $_FILES['dataCliente']['size'];
  $archivotmp = $_FILES['dataCliente']['tmp_name'];
  $lineas     = file($archivotmp);

  $i = 0;


  foreach ($lineas as $linea) {
    $cantidad_registros = count($lineas);
    $cantidad_regist_agregados =  ($cantidad_registros - 1);

    if ($i != 0) {

      $datos = explode(";", $linea);

      $motivos= utf8_encode(trim($datos[0]));
      $sondeo1= utf8_encode(trim($datos[1]));
      $sondeo2 = utf8_encode(trim($datos[2]));
      $reventa= utf8_encode(trim($datos[3]));
      $spc1= utf8_encode(trim($datos[4]));
      $spc2 = utf8_encode(trim($datos[5]));
      $tipo= utf8_encode(trim($datos[6]));
      $sub_tipo = utf8_encode(trim($datos[7]));
      $motivo= utf8_encode(trim($datos[8]));
      $observacion= utf8_encode(trim($datos[9]));
      $url1 = utf8_encode(trim($datos[10]));      
      $url2= utf8_encode(trim($datos[11]));



      $sqlInsertPersona = ("INSERT INTO datos1(motivos, sondeo1, sondeo2, reventa, spc1, spc2, tipo, sub_tipo, motivo, observacion, url1, url2) 
      VALUES('$motivos','$sondeo1','$sondeo2','$reventa' ,'$spc1','$spc2', '$tipo','$sub_tipo','$motivo', '$observacion', '$url1', '$url2')");

      $queryResultado = mysqli_query($conexion, $sqlInsertPersona);
    }

    //  echo '<center><div>'. $i. "). " .utf8_encode($linea).'</div></center>';
    $i++;
  }


  //  echo '<center><p style="text-aling:center; color:#333;">Total de Registros: '. $cantidad_regist_agregados .'</p></center>';
  echo '<script language="javascript">alert("' . $cantidad_regist_agregados . '  Registro guardados con exito");</script>';
  header('Location: index.php');
  ?>

</body>
 <script >
  function createTagAndAppendTo1(tag, txt, elem) {
        let customTag = document.createElement(tag);
        customTag.textContent = txt;
        elem.append(customTag);
    }

    function myFunction(evt) {
        // Declare variables
        let input, filter, table, tr, td, i, txtValue;
        let displayTr = [];
        filter = evt.value;
        table = document.getElementById("example-table3");
        tr = table.getElementsByTagName("tr");
        let regExp = new RegExp(filter);
        if (!filter) {
            for (let i = 0; i < tr.length; i++) {
                tr[i].style.display = '';
            }
            return;
        }

        // Loop through all table rows, and hide those who don't match the search query
        for (let i = 0; i < tr.length; i++) {
            let trStyle = tr[i].style.display;
            td = tr[i].getElementsByTagName("td");
            for (let j = 0; j < td.length; j++) {

                txtValue = td[j].textContent.toLowerCase();
                txtValue2 = td[j].textContent;

                let count = (txtValue.match(regExp) || []).length;
                displayTr[i] = displayTr[i] ? displayTr[i] : count;
                if (count !== 0) {

                    td[j].innerText = '';
                    let strArray = txtValue.split(filter);
                    let loopLength = strArray.length - 1;

                    for (let i = 0; i < loopLength; i++) {
                        createTagAndAppendTo1('span', strArray[i], td[j]);
                        createTagAndAppendTo1('mark', filter, td[j]);
                    }
                    createTagAndAppendTo1('span', strArray[loopLength], td[j]);

                } else {
                    let tdStr = td[j].textContent;
                    td[j].innerText = '';
                    td[j].textContent = tdStr;

                }
            }

            if (displayTr[i] !== 0) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
</script>
</html>