<?php

   echo "<h1> Seja bem vindo! " . "</h1><br>";
   echo "Dados Informados: <br>";

   $num1 = $_POST["1valor"];
   $num2 = $_POST["2valor"];
   $op = $_POST["operacao"];

   $so = "1valor" + "2valor";
   $su = "1valor" - "2valor";
   $m = "1valor" * "2valor";
   $d = "1valor" / "2valor";

   if ($op = "so") {
      echo "A soma é $so"
   };

   or

   if ($op = "su") {
      echo "A diferença é $su"
   };

   or

   if ($op = "m") {
      echo "O produto é $m"
   };

   or

   if ($op = "d") {
      echo "A divisão é $d"
   };