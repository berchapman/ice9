<?php

//CONSTANTS
    //GLOBAL CONSTANTS
    define("COMPANY", "Ice9");
    define("SITENAME", COMPANY);
    define("SLOGAN", "cool collective");
        

//STYLE
    //GLOBAL STYLESHEETS
    include('snippets/header_styles.html');
    //CUSTOM, PAGE-SPECIFIC STYLESHEETS
    echo '<link rel="stylesheet" href="style/custom-page-styles/', getCurrentFileName(), '.css">';

//FUNCTIONS
    /* getCurrentFileName */
    // Gets current file name (returns file name where it is invoked)
    function getCurrentFileName(){
        $thisfile = basename($_SERVER['PHP_SELF'], '.php');    
        echo($thisfile);
    }
    





?>