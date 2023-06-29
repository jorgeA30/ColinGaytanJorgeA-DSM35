<?php
    $h=30;
    $g=15;

    $suma=$h+$g;
    $multi=$h*$g;
    $resta=$h-$g;
    $divicion=$h/$g;

    /*figuras perimetros y areas */

    /*Circulo */
    $r=5;
    $pi=3.1416;

    $per=(2*$pi)*$r;
    $area=$pi*($r*$r);

    /*triangulo */
    $L1=7;
    $L2=7;
    $B=8;
    $H=6;
    
    $Pt=$L1+$L2+$B;
    $At=($B*$H)/2;

    /* rectangulo*/
    $Br=8;
    $Hr=5;

    $Ar=$Br*$Hr;
    $Pr=(2*$Br)+(2*$Hr);

    /*cuadrado */
    $L=6;
    $Pc=4*$L;
    $Ac=$L*$L;


    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>operaciones basicas </h1>

    <p>
        <h3>Las operaciones basicas se van hacer con <?php echo($h." y ".$g."<br><br>") ?></h3>

        El resultado de la suma es <?php  echo ($suma."<br>"); ?>
        El resultado de la resta es <?php  echo ($resta."<br>"); ?>
        El resultado de la multiplicacion es <?php  echo ($multi."<br>"); ?>
        El resultado de la divicion es <?php  echo ($divicion."<br>"); ?>

    </p>

    <h2>Areas y perimetros </h2>

    <p>
        
    <h5>
    El perimetro del circulo es <?php echo($per);  ?> y el area es de <?php echo($area."<br>");  ?>
    El perimetro del triangulo es <?php echo($Pt);  ?> y el area es de <?php echo($At."<br>");  ?>
    El perimetro del rectangulo es <?php echo($Pr);  ?> y el area es de <?php echo($Ar."<br>");  ?>
    El perimetro del cuadrado es <?php echo($Pc);  ?> y el area es de <?php echo($Ac."<br>");  ?>
    </h5>

    </p>


    
</body>
</html>