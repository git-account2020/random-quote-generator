<?php
// --- PHP - Random Quote Generator ---
// How do you work on php and test it without using a seperate php file?


// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array 
$quotes = array(

  array('quote' => '"The only way to learn a new programming language is by writing programs in it."',
        'source' => 'Dennis   Richie',
        'citation' => '',
        'year' => ''),
  array('quote' => '"In some ways, programming is like painting. You start with a blank canvas and certain basic raw materials. You use a combination of science, art, and craft to determine what to do with them.',
        'source' => 'Andrew Hunt',
        'citation' => '',
        'year' => ''),
   array('quote' => '"Testing leads to failure, and failure leads to understanding."',
        'source' => 'Burt Rutan',
        'citation' => '',
        'year' => ''),
   array('quote' => '"The best error message is the one that never shows up."',
        'source' => 'Thomas Fuchs',
        'citation' => '',
        'year' => ''),
   array('quote' => '“Programs must be written for people to read, and only incidentally for machines to execute.”',
        'source' => 'Harold Abelson',
        'citation' => '',
        'year' => '')
);


  
// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
  
  $randomElement = $array[rand(0,4)]; 
  return $randomElement;  
} 



//Create the printQuote function.
function printQuote($quotes){
 
  
  $quoteElement = getRandomQuote($quotes);
  $source = $quoteElement['source'];
  $quote = $quoteElement['quote'];
  $citation = $quoteElement['citation'];
  $year = $quoteElement['year'];
  


echo "<p class=\"quote\">" . $quote . "</p>";
echo "<p class=\"source\">" . $source;
  //if (
//echo  "<span class=\"citation\"> [citation here] </span>";
//echo  "<span class=\"year\"> [year here] </span>";
echo "</p>";
  
}

printQuote($quotes);


?>