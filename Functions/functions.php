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

    //Print simple array
    function readSimpleArray($array){

        foreach($array as $workers)
        {
        foreach($workers as $worker)
        {
        echo $worker ." ";
        }
        echo "<br>";
        }

    }


  //Print multiple array
  function readMultipleArray($array){
    for($j=1;$j<=$array[1];$j++)
    {
    foreach($array[0][$j] as $workers)
    {
    foreach($workers as $worker)
    {
    echo $worker ." ";
    }
    echo "<br>";
    }
   }
  }


  //Design array workers
  function arrayWorkers($filePath){

    $i=0;
    $str;
    $arrayWorkers   = array();
    $aa  = array();
    $fp = fopen($filePath, "r");

    while ($strR = fscanf($fp, "%s\t%s")){
        $i++;

           $workerName  = stristr($strR[0], "=", true );
           $str     = substr($strR[0], strlen($workerName)+1);
           $arrayWorkers[$i] = [];

           while(strlen($str)>12){

             $day     = substr($str, 0,2);
             $start   = substr($str, 2,5);
             $end     = substr($str, 8,5);

              $aa = array_push($arrayWorkers[$i], array($workerName,$day,$start,$end));

              $strF  = stristr($str, ",", true );
              $str  = substr($str, strlen($strF)+1);

            }
        }

    fclose($fp);

   return array($arrayWorkers,$i);

  }

  //Functiojn to lookingn matches
  function lookMatches($workers,$results)
  {
    $arrayResults   = array();
    $bb  = array();
    $h = 0;

    for($j=1;$j<=$workers[1];$j++)
    {
      $h++;
      $arrayResults[$h] = [];
      for($k=2;$k<=$workers[1];$k++)
      {
          if($j!=$k && $j<$k){
            $match=0;

            for($m=0;$m<count($workers[0][$j]);$m++)
            {
              for($n=0;$n<count($workers[0][$k]);$n++)
              {

                if($workers[0][$j][$m][1]==$workers[0][$k][$n][1])
                {
                  if(($workers[0][$k][$n][2] >= $workers[0][$j][$m][2] && $workers[0][$k][$n][2] <= $workers[0][$j][$m][3])
                  or ($workers[0][$k][$n][3] >= $workers[0][$k][$n][2] or $workers[0][$k][$n][3] <= $workers[0][$j][$m][3]))
                  {

                       $match++;
                       $nameWk1  = $workers[0][$j][$m][0];
                       $nameWk2  = $workers[0][$k][$n][0];
                  }
                }
              }
            }
            if($match>0){
             $results->addResult($nameWk1,$nameWk2,$match);
            }

        }
      }
    }
  }

 ?>
