<?php

   require_once('Cliente.php');
   require_once('Funcionario.php');
   require_once('Estoque.php');
   require_once('Gerente.php');
   require_once("DAO/Conexao.php");
   require_once("DAO/Cadastro.php");
   require_once("DAO/Cadastroes.php");
   require_once("DAO/Cadastrofu.php");
   require_once("DAO/Cadastroge.php");
   require_once("DAO/Consultar.php");
   require_once("DAO/Consultares.php");
   require_once("DAO/Consultarfu.php");
   require_once("DAO/Consultarge.php");
   require_once("DAO/Atualizar.php");
   require_once("DAO/Excluir.php");

   /*
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
   */
  echo "------ Teste de Banco de Dados --------<br><br>";
  $conexao = new Conexao();
  $conexao->Conectar();

  $Cadastrar = new Cadastro();
  echo $insert->cadastro($conexao, "", "Marivaldo gomes", "2025-06-22", "suco de uva", 3, 20,50);

  $esto = new Cadastroes();
  echo $insert->esto($conexao, "", "Arroz de casa", 500, "2024-05-21", 50,00);


  $funci = new Cadastrofu();
  echo $insert->funci($conexao, "", "Arailas valdir", "992134568", "M", "Rua joel amaral noia 223", 1500);
  
  $gere = new Cadastroge();
  echo $insert->gere($conexao, "", "Larimada dos santos", "994891298", "F", "Rua A fueta macedo 325", 3000);

  $atucl = new Atualizar();
  echo $atu->update($conexao, "Marivaldo ", 1, "cadastro");

  $select = new Consultar();
  echo $select->consultarIndividual($conexao, "cadastro",1);
  echo $select->consultarTudo($conexao,"cadastro");


  $selesto = new Consultares();
  echo $selesto->consultarIndividual($conexao, "estoque",1);
  echo $selesto->consultarTudo($conexao,"estoque");
  
  $selfunci = new Consultarfu();
  echo $selfunci->consultarIndividual($conexao, "funcionario",1);
  echo $selfunci->consultarTudo($conexao,"funcionario");

  $selgeren = new Consultarge();
  echo $selgeren->consultarIndividual($conexao, "gerente",1);
  echo $selgeren->consultarTudo($conexao,"funcionario");
   
  
  $exc = new Excluir();
  echo $exc->deletar($conexao, "estoque", 1);
   
?>