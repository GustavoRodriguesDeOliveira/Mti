<?php

   require_once('Cliente.php');
   require_once('Funcionario.php');
   require_once('Estoque.php');
   require_once('Gerente.php');

   $clienElias = new Cliente("Elias magu","2023-01-10","papel de nutella","2 unidades","20");
   echo $clienElias;

   echo "<br><br>";

   $funcMariva = new Funcionario(120,"Mariva dolas","1120320320","F","Rua bifonte allan ",1300);
   echo $funcMariva;

   echo "<br><br>";

   $estoProdu = new Estoque("Luvas alas",300,"2030-12-20",15);
   echo $estoProdu;

   echo "<br><br>";

   $gerNaldo = new Gerente(01,"Naldo batista","1293939345","M","Rua dos vilas da lapada",55000);
   echo $gerNaldo;

   echo "<br> O Bonus é: ".$gerNaldo->calcular();
   
?>