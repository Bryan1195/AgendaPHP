<?php
  require('lib.php');
  $cn = new ConectorBD();
  if($cn->initConexion('agenda') == 'OK'){
    $data['nombre'] = "Cristian Carvajal";
    $data['fecha_nac'] = "1993-05-15";
    $data['correo'] = "cfcc@gmail.com";
    $data['clave'] = password_hash('159', PASSWORD_DEFAULT);
    $cn->insertData('tb_usuario', $data);

    $data['nombre'] = "Betsy Cubilla";
    $data['fecha_nac'] = "1967-08-22";
    $data['correo'] = "boca@gmail.com";
    $data['clave'] = password_hash('753', PASSWORD_DEFAULT);
    $cn->insertData('tb_usuario', $data);

    $data['nombre'] = "Usuario";
    $data['fecha_nac'] = "2019-02-10";
    $data['correo'] = "ensayo@gmail.com";
    $data['clave'] = password_hash('369', PASSWORD_DEFAULT);
    $cn->insertData('tb_usuario', $data);

    echo "Se ha insertado todos los registros";
  }else{
    echo "Se ha producido un error en la insercion";
  }
?>
