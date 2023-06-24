
<?php

$hola='localhost';
$usuario='root';
$contra='';
$DB='proyectoric';


$cone=new mysqli($hola,$usuario,$contra,$DB);

      if($cone->connect_errno){
                 die("fallo");
        }else{
                  echo("Se conecto");
      }


?>