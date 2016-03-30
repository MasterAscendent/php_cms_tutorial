<?php

  class Car {

    var $Wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels(){

      $this->wheels = 10;

    }

    function CreateDoors(){

      $this->doors = 6;

    }

  }

  $bmw = new Car();
  $truck = new Car();
  echo $bmw->wheels . "<br />";
  $truck->CreateDoors();
  echo $truck->wheels = 10;
  echo $truck->doors = ;

 ?>
