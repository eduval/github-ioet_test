<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/eduval/github-ioet_test">
    <img src="img/img.jpeg" alt="Logo" width="80" height="80">
  </a>

<h3 align="center">IOET - Solution ACME Company</h3>

  <p align="justify">
    <strong>Situation : </strong> The company ACME offers their employees the flexibility to work the hours they want. But due to some external circumstances they need to know what employees have been at the office within the same time frame. <br><br>
    <strong>Objetive</strong> The goal of this exercise is to output a table containing pairs of employees and how often they have coincided in the office.
    <br />
    <a href="https://github.com/eduval/github-ioet_test" target="_blank"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://testacmeioet.000webhostapp.com/" target="_blank">View Solution</a>
    ·
    <a href="https://testacmeioet.000webhostapp.com/Data/data.txt" target="_blank">View Data Set </a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->

  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#solution-summary">Solution summary</a>
    </li>
    <li>
      <a href="#approach-methodology">Approach and Methodology</a>
    </li>
      <li>
      <a href="#prerequisites">Prerequisites</a>
    </li>
    <li><a href="#instructions">Instructions</a></li>
  <li><a href="#example">Example</a></li>
  </ol>


<!-- Solution summary -->
## Solution summary

Considering an easy access, fast and effective solution, in this case the selected language was PHP.

This solution was created to Web enviroment therefore, you need to run it with Apache Server.

After read the .txt file, with some reliable functions, dynamic arrays are created and suitable iterated in order to find workers schedules coincidences. After that, using the pattern MVC without any external library these coincidences are putt into an a new object that at the end is printing at the screen.

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Approach and Methodology

First of all, the multidimensional arrays are created, according to the size of the .txt file. Each single array is compared with each other. The iteration starts finding the same days, after that, the start and end time are compared for each row. With each match, an object that was previously instanced, is used to save the results and show it at the screen.

The main functions are: `arrayWorkers`, `lookMatches`

* arrayWorkers
 `
  This function reads the file and creates multidimensional arrays according to the file size.
 `

* lookMatches
  `
 This function finds matches between every single array, considering first the day, after the start time and finally the end time.
  `

  <p align="right">(<a href="#top">back to top</a>)</p>

### Prerequisites

This is a list things you need to use the software and how to install them.

* Apache Server
  `
 This solution was designed to Web environment with Apache Server
  `
* Web Server
  `
  You could use any Web Server
  `

  <p align="right">(<a href="#top">back to top</a>)</p>

### Instructions

1. Web Server Apache
Apache is a web server and you need it in order to run php files in a web page.<br><br>
Note: Clients not need to install Apache, they just need a Web Browser like:<br>
        Google Chrome.<br>
        Mozilla Firefox.<br>
        Microsoft Edge.<br>
        Internet Explorer.<br>
        Safari.    

2. Clone the repo
   ```sh
   git clone https://github.com/eduval/github-ioet_test/
   ```
3. Data .txt
   `
   Increase, decrease or change the data of data.txt file.
   Path: Data/data.txt
   `
4. Open index `index.php`
   `
  Using your preferred Web Browser open the file index.php
   `

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Example

Considering the next entry data:

RENE=MO10:00-12:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00- 21:00<br>
ASTRID=MO10:00-12:00,TH12:00-14:00,SU20:00-21:00<br>
COSHI=MO10:00-12:00,TH12:00-14:00,SU20:00-21:00<br>
KONA=MO10:00-12:00,TH12:00-14:00,SU20:00-21:00<br>
SEIA=TU08:00-09:00,TU10:00-12:00,TH01:00-03:00,SA14:00-18:00,SU20:00- 21:00<br>
KIM=WE10:00-12:00,TU10:00-12:00<br>

You could see the output clicking here: <a href="https://testacmeioet.000webhostapp.com/" target="_blank">View Solution</a>

<p align="right">(<a href="#top">back to top</a>)</p>
