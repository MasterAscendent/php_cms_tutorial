<?php

  class Car {

    function MoveWheels(){

      echo "Wheels move";

    }

  }

  $bmw = new Car();
  $merces_benz = new Car();

  $bmw->MoveWheels();

  $merces_benz->MoveWheels();
 ?>
