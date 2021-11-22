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

//Class Controller

  class Controller{

    private $nameW1 = array();
    private $nameW2 = array();
    private $match = array();

    public function  __construct(){

    }

    //Constructor
    public function addResult($nameW1,$nameW2,$match){
     $this ->nameW1[] = $nameW1;
     $this ->nameW2[] = $nameW2;
     $this ->match[] = $match;
    }


    //Methods
    public function printResults(){
      for($i=0;$i<count($this -> nameW1);$i++){
        self::formatoResutl($this->nameW1[$i],$this->nameW2[$i],$this->match[$i]);
      }
    }

    public function formatoResutl($nameW1,$nameW2,$match){
        echo "<div class='media-body font-weight-light'>".$nameW1." match with ".$nameW2." - <strong><span class='badge badge-light'>".$match." times. </span></strong></div>";
    }


  }

 ?>
