<?php //test1
  $username = "John Ballén";
  echo $username;
  echo "<br>";
  $current_user = $username;
  echo $current_user;
  
  //***********Arrays************//
  $componentes = array('Monitor','disco duro','procesador','memoria','fuente');
  echo $componentes[2];


  //*****Concatenacion*******//
  //$msg1 = "Usted tiene ";
  $msgs = 5;
  //$msg2 = "mensajes";

  print "Usted tiene" . $msgs . "mensajes";

//**** Tipos de cadena *****//

  $variable = 5;
  $info = 'Preface variables with a $ like this: $variable';
  echo $info;
  echo "<br>";

//Es difernete a esto:
//esto si muestra el valor de la variable almacenada. 
  $info = "Preface variables with a $ like this: $variable";
  echo $info;


