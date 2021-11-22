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

//Class Schedule

  class Schedule{

    private $day = array();
    private $timeStart = array();
    private $timeEnd = array();
    private $idWorker = array();


    public function  __construct(){

    }

    //Constructor
    public function addSchedule($idWorker,$day,$timeStart,$timeEnd){
     $this ->day[] = $day;
     $this ->timeStart[] = $timeStart;
     $this ->timeEnd[] = $timeEnd;
     $this ->idWorker[] = $idWorker;
    }

    public function  __construct(){

    }

    


  }

 ?>
