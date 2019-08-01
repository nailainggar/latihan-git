<?php
   $harga_kg = 15000;
   $setiapdus = 5;
   $totaldus = 6;
   $hargajual_dus = 2000;

  $jum1 = $harga_kg*$setiapdus;
  $jum2 = $jum1*$totaldus;
  $jum3 = $jum2+($totaldus*$hargajual_dus);

  echo" hasil penjualan seluruh jambu dan dus tersebut : $jum3";