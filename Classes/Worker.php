<?php

/***
@Author: Washington Valencia
@email: educristo@gmail.com
@date: 21 Noiv 2021

@Description:

The company ACME offers their employees the flexibility to work the hours they want.
But due to some external circumstances they need to know what employees have been at the office within the same time frame
The goal of this exercise is to output a table containing pairs of employees and how often they have coincided in the office.

This page involve functions

***/

//Class Worker

  class Worker{

    //Attributes
    private $idWorker = array();
    private $name = array();

    //Constructor
    public function create($name,$idWorker){
     $this ->name[] = $name;
     $this ->idWorker[] = $idWorker;
    }

    public function  __construct(){

    }
    //Methods

    public function printWorker(){
      for($i=0;$i<count($this -> name);$i++){
        self::formato($this->name[$i]);
      }
    }

    public function formato($name){
        echo "Nombre : ".$name;
    }

  }

 ?>
