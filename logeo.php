<?php
    $csv_fin=" ";
    $csv_sep=",";
    $csv_arch1 ="usuarios.csv";
    $csv_arch2 ="Alumnos.csv";
    $csv_arch3 ="maestros.csv";
    $csv_arch4 ="calificaciones.csv";
    $csv_arch5 ="materias.csv";
    $csv1 = "";
    $csv2 = "";
    $csv3 = "";
    $csv4 = "";
    $csv5 = "";

    if (!file_exists("usuarios.csv")) {
      $csv1.="user".$csv_sep."contraseña".$csv_sep."email".$csv_fin."\n";
      $csv1.="admin123".$csv_sep."pass1".$csv_sep."hectorgurrolalopez.190@gmail.com".$csv_fin."\n";
      if (!$handle = fopen($csv_arch1,"w"))
      {
        echo "NO C";
      }
      if (fwrite($handle, utf8_decode($csv1)) === FALSE)
      {
        echo "BYE";
      }
      fclose($handle);
    }
    if (!file_exists("Alumnos.csv")) {
      $alumnos = fopen("Alumnos.csv","w");
      fputs($alumnos, "Control,Nombre,AppellidoP,ApellidoM,Carrera,Sexo".PHP_EOL);
      fclose($alumnos);
    }
    if (!file_exists("Maestros.csv")) {
      $maestros = fopen("Maestros.csv","w");
      fputs($maestros, "Clave,Nombre,AppellidoP,ApellidoM,Titulo,Especialidad".PHP_EOL);
      fclose($maestros);
    }
    if (!file_exists("Materias.csv")) {
      $maestros = fopen("Materias.csv","w");
      fputs($maestros, "Clave,Nombre,Especialidad,Grado,Profesor".PHP_EOL);
      fclose($maestros);
    }
    if (!file_exists("Grupos.csv")) {
      $grupos = fopen("Grupos.csv","w");
      fputs($grupos, "Clave G,Grado,Clave Doc,Clave M".PHP_EOL);
      fclose($grupos);
    }
    if (!file_exists("GruposAlta.csv")) {
      $alumnos = fopen("GruposAlta.csv","w");
      fputs($alumnos, "Control,Clave,Calif1,Calif2,Calif3,Calif4".PHP_EOL);
      fclose($alumnos);
    }
?>
<!DOCTYPE>
<meta charset="UTF8">
<html lang="es">
  <head>
    <title>CONECT MX</title>
    <link rel="stylesheet" type="text/css"
    href="css/diseñado.css">
  </head>
  <body style="background: url(ultima.jpg)">
        <br>
        <div id = "inicio">
        <form action="validar.php" method="post">
          <h2>Entrar Como</h2>
          <br>
          <ul class="opciones">
          <li id="aOpciones"><a href="LogAlu.php">USER</a></li>
          <li id="aOpciones"><a href="logAdm.php">ADMIN</a></li>
        </div>
        </form>
  </body>
</html>
