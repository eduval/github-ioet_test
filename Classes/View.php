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

//Class View

class View
{
    private $results;

    public function __construct(Controller $results)
    {
        $this->results = $results;
    }

    public function head()
    {
        $htmlForm = "<!doctype HTML>";
        $htmlForm = $htmlForm . "<html><head><title>The company ACME</title></head>";
        $htmlForm = $htmlForm . "<body>";
        $htmlForm = $htmlForm . "<h1>The company ACME</h1>";
        $htmlForm = $htmlForm . "<h2>List of employees with coincided in the office</h2>";
        $htmlForm = $htmlForm . "<hr class='h1 mt-4 mb-0 font-weight-normal'><font color=''#990099'></font></hr>";
        $htmlForm = $htmlForm . "<br>";


        echo $htmlForm;
    }

    public function printCoincidences()
    {
        echo($this->results->printResults());
    }

    public function foot()
    {

      $date = date('Y-m-d H:i:s');


        $htmlForm = "<hr class='h1 mt-4 mb-0 font-weight-normal'><font color=''#990099'></font></hr>";
        $htmlForm = $htmlForm . "<br>";
        $htmlForm = $htmlForm . "<p class='font-weight-lighter'>Date: $date</p>";
        $htmlForm = $htmlForm . "</body></html>";

        echo $htmlForm;
    }


}
?>
