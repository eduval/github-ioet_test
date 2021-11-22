<?php

/***
@Author: Washington Valencia
@email: educristo@gmail.com
@date: 21 Noiv 2021

@Description:

The company ACME offers their employees the flexibility to work the hours they want.
But due to some external circumstances they need to know what employees have been at the office within the same time frame
The goal of this exercise is to output a table containing pairs of employees and how often they have coincided in the office.

***/

include('Functions/functions.php');
include('Classes/Controller.php');
include('Classes/View.php');

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
//Read file
$workers =  arrayWorkers("Data/data.txt");

//Looking for matches
$controller = new Controller();
lookMatches($workers,$controller);

//Present results
$view = new View($controller);
$view->head();
$view->printCoincidences();
$view->foot();

 ?>
