<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
<!-- Juan Mercado el mejor practicante (cualquier problema con juli)-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Matriz RRSS Público - Editor</title>
  <link href="assets/dist/themes/Flaty/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="//biblioteca.emtelco.co/_plugins/inputmask/js/inputmask.js"></script>
  <!-- Actulizar versión de 3 a 4 boostrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="../css/estilo.css" rel="stylesheet">
</head>


<body>

  <main>
    <section class="header-border">
      <header>
        <img src="../img/banner.png" alt="" style="background-repeat: no-repeat;
        background-position: center; 
        width: 100%;">
      </header>
      <nav class="navbar navbar-expand-lg navbar-dark "><span>&nbsp;</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav mr-auto">
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <!--  <input type="search" class="form-control" id="my-search" placeholder="¿Qué estás buscando?">-->
            <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Que estas Buscando" style="width: 220px;  margin:5px;">
            <a href="#" data-toggle="modal" data-target="#Modal_nuevo">
              <button type="button" class="btn btn-success" onclick="stati3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                  <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg> Nuevo Registro</button>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal_nuevo1">
              <button type="button; margin: 5px; padding: 5px;" class="btn btn-danger" onclick="stati3">
                <i class="bi bi-database-fill-x"></i> Vaciar BD</button>
            </a>
            <a href="#" data-toggle="modal" data-target="#Modal_nuevo2">
              <button type="button; margin: 5px; padding: 5px;" class="btn btn-success" onclick="stati3">
                <i class="bi bi-filetype-csv"></i> Subir CSV</button>
            </a>



            </button>
          </form>
        </div>
      </nav>
    </section>

    <center>
      <!-- id="example-table"  -->
      <table class="table_id">
        <thead>
          <tr class="tableizer-firstrow">
            <th class="rtecenter" style="vertical-align: middle; border-color: 1px #000000; background-color: #270699;"><span style="color:#FFFFFF;"><span style="color:#FFFFFF"><strong>Motivos (Lista Desplegable)</strong></span></th>
            <th class="rtecenter" style="vertical-align: middle; border-color: 1px #000000; background-color: #270699;"><span style="color:#FFFFFF;"><span style="color:#FFFFFF"><strong>Sondeo 1</strong></span></th>
            <th class="rtecenter" style="vertical-align: middle; border-color: 1px #000000; background-color: #270699;"><span style="color:#FFFFFF;"><span style="color:#FFFFFF"><strong>Sondeo 2</strong></span></th>
            <th class="rtecenter" style="vertical-align: middle; border-color: 1px #000000; background-color: #270699;"><span style="color:#FFFFFF;"><span style="color:#FFFFFF"><strong>Reventa de Beneficios - Manejo de objeción</strong></span></th>
            <th class="rtecenter" style="vertical-align: middle; border-color: 1px #000000; background-color: #270699;"><span style="color:#FFFFFF;"><span style="color:#FFFFFF"><strong>Opciones</strong></span></th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM `datos1`";
          $resultadoc = $conexion->query($query);
          while ($row = $resultadoc->fetch_assoc()) {
          ?>
            <tr height=28 style='height:21.0pt'>

              <b>
                <td><?php echo $row['motivos'] ?></td>
              </b>
              <b>
                <td><?php echo $row['sondeo1'] ?></td>
              </b>
              <b>
                <td><?php echo ($row['sondeo2']) ?></td>
              </b>
              <b>
                <td><?php echo $row['reventa'] ?></td>
              </b>
              <td height=28 style='height:21.0pt;border-top:none'>
                <a href="#" data-toggle="modal" data-target="#Modal_<?= utf8_encode($row["id"]); ?>">
                  <button class="btn btn-outline-primary"> <i class="fa fa-pencil"> </i></button>
                </a>
                <a href="" data-toggle="modal" data-target="#Modalelimin_<?= utf8_encode($row["id"]); ?>">
                  <button class="btn btn-outline-success"><i class="fa fa-trash"></i></button>
                </a>
              </td>
              <!-- Modal editar registro -->
              <div class="modal fade" id="Modal_<?= utf8_encode($row["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"><strong>Editando Registro #</strong><?= utf8_encode($row["id"]); ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="actualizar.php">
                      <div class="modal-body">
                        <div class="row">

                          <div class="col-md-12">
                            <label> </label>
                            <input type="hidden" name="id" value="<?= utf8_encode($row["id"]); ?>">

                          </div>

                          <div class="col-md-12">
                            <label><strong>Motivos (Lista Desplegable)</strong></label>
                            <input type="hidden" name="datos1" value="<?= utf8_encode($row["datos1"]); ?>">
                            <textarea class="form-control" name="motivos"><?= $row["motivos"]; ?></textarea>
                          </div>

                          <div class="col-md-12">
                            <label><strong>Sondeo 1</strong></label>
                            <textarea class="form-control" name="sondeo1"><?= $row["sondeo1"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>Sondeo 2</strong> </label>
                            <textarea class="form-control" name="sondeo2"><?= $row["sondeo2"]; ?></textarea>
                          </div>

                          <div class="col-md-12">

                            <label><strong>Reventa de Beneficios - Manejo de objeción</strong></label>
                            <textarea class="form-control" name="reventa"><?= $row["reventa"]; ?></textarea>
                          </div>

                          <div class="col-md-12">
                            <label><strong>SPC 1</strong></label>
                            <textarea class="form-control" name="spc1"><?= $row["spc1"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>SPC 2</strong></label>
                            <textarea class="form-control" name="spc2"><?= $row["spc2"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>Tipo</strong></label>
                            <textarea class="form-control" name="tipo"><?= $row["tipo"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>Sub Tipo</strong></label>
                            <textarea class="form-control" name="sub_tipo"><?= $row["sub_tipo"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>Motivo</strong></label>
                            <textarea class="form-control" name="motivo"><?= $row["motivo"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>Observación</strong></label>
                            <textarea class="form-control" name="observacion"><?= $row["observacion"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>URL 1</strong></label>
                            <textarea class="form-control" name="url1"><?= $row["url1"]; ?></textarea>
                          </div>
                          <div class="col-md-12">
                            <label><strong>URL 2</strong></label>
                            <textarea class="form-control" name="url1"><?= $row["url1"]; ?></textarea>
                          </div>


                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-outline-success">Guardar Cambios</button>
                      </div>
                    </form>


                  </div>
                </div>
              </div>


              <!-- Modal  eliminar registro-->
              <div class="modal fade" id="Modalelimin_<?= utf8_encode($row["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro #<?= utf8_encode($row["id"]); ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="eliminar.php">
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-md-12">
                            <input type="hidden" name="id" value="<?= utf8_encode($row["id"]); ?>">


                            <div class="col-md-12">
                              <label><strong>Clave</strong></label>
                              <input type=password class="form-control" name="clave">
                            </div>

                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-outline-success">Guardar Cambios</button>
                        </div>
                    </form>


                  </div>
                </div>
              </div>

              

            </tr>
            <!-- Modal eliminar bd-->
            <div class="modal fade" id="Modal_nuevo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Vaciar Base de Datos </BAse><?= utf8_encode($row["id"]); ?></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="eliminar-BD.php">
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-md-12">
                              <input type="hidden" name="id" value="<?= utf8_encode($row["id"]); ?>">


                              <div class="col-md-12">
                                <label>Clave</label>
                                <input type=password class="form-control" name="clave">
                              </div>

                            </div>

                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>  
                          <button type="submit" class="btn btn-outline-success">Guardar Cambios</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          <?php
          }
          ?>

        </tbody>
      </table>
    </center>
   




    <!-- Modal nuevo-->
    <div class="modal fade" id="Modal_nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>Nuevo Registro</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="guardar.php">
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <label> </label>
                  <input type="hidden" name="id" value="<?= utf8_encode($row["id"]); ?>">
                </div>
                <div class="col-md-12">
                  <label><strong>Motivos (Lista Desplegable)</strong></label>
                  <input type="hidden" name="datos1" value="<?= utf8_encode($row["datos1"]); ?>">
                  <textarea class="form-control" name="motivos"><?= $row["motivos"]; ?></textarea>
                </div>

                <div class="col-md-12">
                  <label><strong>Sondeo 1</strong></label>
                  <textarea class="form-control" name="sondeo1"><?= $row["sondeo1"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>Sondeo 2</strong></label>
                  <textarea class="form-control" name="sondeo2"><?= $row["sondeo2"]; ?></textarea>
                </div>

                <div class="col-md-12">

                  <label><strong>Reventa de Beneficios - Manejo de objeción</strong></label>
                  <textarea class="form-control" name="reventa"><?= $row["reventa"]; ?></textarea>
                </div>

                <div class="col-md-12">
                  <label><strong>Spc1</strong></label>
                  <textarea class="form-control" name="spc1"><?= $row["spc1"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>Spc2 </strong></label>
                  <textarea class="form-control" name="spc2"><?= $row["spc2"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>Tipo</strong></label>
                  <textarea class="form-control" name="tipo"><?= $row["tipo"]; ?></textarea>

                </div>
                <div class="col-md-12">
                  <label><strong>Sub Tipo</strong></label>
                  <textarea class="form-control" name="sub_tipo"><?= $row["sub_tipo"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>Motivo </strong></label>
                  <textarea class="form-control" name="motivo"><?= $row["motivo"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>Observación</strong></label>
                  <textarea class="form-control" name="Observacion"><?= $row["observacion"]; ?></textarea>

                </div>
                <div class="col-md-12">
                  <label><strong>URL 1</strong></label>
                  <textarea class="form-control" name="url1"><?= $row["url1"]; ?></textarea>
                </div>
                <div class="col-md-12">
                  <label><strong>URL 2</strong></label>
                  <textarea class="form-control" name="url2"><?= $row["url2"]; ?></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-outline-success">Guardar </button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <!-- Modal subir bd-->
    <div class="modal fade" id="Modal_nuevo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Carga Masiva</h1>
            <button type="button; color:red;" class="close" data-dismiss="modal" aria-label="Close">
          </div>
          <div class="modal-body">
            <form action="recibe_excel.php" method="POST" enctype="multipart/form-data">
              <div class="file-input text-center">
                <input type="file" name="dataCliente" id="file-input" class="file-input__input" accept=".csv" />
                <label class="file-input__label" for="file-input">
                  <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
                  <span>Elegir Archivo CSV</span></label>
              </div>
              <div class="text-center mt-5">
                <input type="submit" name="subir" class="btn btn-success mt-2b tn-enviar" value="Subir Archivo CSV" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>

          </div>
        </div>
      </div>
    </div>




  </main>
</body>
<footer class="footer">
  <div class="footer-copyright text-center py-3">2022. Gestión del Aprendizaje - Emtelco</div>
</footer>
<style>
  mark,
  .mark {
    padding: .2em;
    background-color: #e8d156 !important;
  }

  .table>thead>tr>th {
    vertical-align: bottom;
    border-bottom: 4px solid #5191cc;
    background-color: #28428d;
    color: white;
    padding: 15px;
    text-align: center;
  }

  .btn-primary {
    color: #fff;
    background-color: #14326b;
    border-color: #14326b;
    margin-left: 15px;
  }
  .footer {
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:  #002060;
    color: white;
    text-align: center;
  }

</style>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../archivos_js/buscador.js"></script>